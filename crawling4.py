# -*- coding: utf-8 -*-
from selenium import webdriver
from bs4 import BeautifulSoup
import argparse
import datetime
import time, os
import pandas as pd
import multiprocessing
import warnings
import re
import json
import schedule
import pandas as pd
import numpy as np
from pororo import Pororo
from wordcloud import WordCloud
from collections import Counter
import matplotlib.pyplot as plt
import datetime
import pandas as pd
from gensim.summarization.summarizer import summarize
import re


warnings.filterwarnings(action='ignore')

BASE_DIR = './'
DATA_DIR = 'crawl_data'
web = os.path.join(BASE_DIR, 'chromedriver')
_url = "https://news.naver.com/"

news_type_list = [('today_main_news','100'), ('section_politics','100'), ('section_economy','101'), ('section_society','102'),('section_life','103'),('section_world','104'),('section_it','105')]
def replace_all(text, dic):
    for j in dic.values():
        text = re.sub(j, ' ', text)
    return text

def preprocessing_div_contents(x):
    find_re = {
        "find_icon" : r"©[.]+",
        "find_reporter" : r"[가-힣]{2,4} ([가-힣])*기자",
        "find_email" : r'[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+',
        "find_things" : r'\[.+?\]',
        "find_useless_bracket" : r"\( *\)",
        "find_n" : r'\n',
        "find_backslash" : r"\\",
        "find_spaces" : r"  +"
    }

    result = replace_all(x, find_re)    

    return result.strip()

def crawling(news_type, num):
    def get_news_info_df(news_type):
        title = driver.find_element_by_xpath('//*[@id="ct"]/div[1]/div[2]/h2').text
        date = driver.find_element_by_xpath('//*[@id="ct"]/div[1]/div[3]/div[1]/div[1]/span').text
        editor = driver.find_element_by_xpath('//*[@id="ct"]/div[1]/div[3]/div[2]/a/em').text
        press = driver.find_element_by_xpath('//*[@id="ct"]/div[1]/div[1]/a/img[1]').get_attribute('alt')
        p = re.compile(r'[0-9]+.[0-9]+.[0-9]+')
        if p.match(date) is None:
            date = driver.find_element_by_xpath('//*[@id="ct"]/div[1]/div[3]/div[1]/div/span').text
        date = date[:10]
        print("news_type:", news_type )
        date = date.replace('.', '-')

        pre_contents = driver.find_element_by_xpath('//*[@id="dic_area"]').text
        contents = preprocessing_div_contents(pre_contents)
        image_url = get_poster_url()
        news_url = driver.current_url
        df = pd.DataFrame([news_type, title, date, pre_contents, contents, image_url, news_url, editor, press]).T
        df.columns = ['news_type', 'title', 'date', 'all_contents', 'contents', 'image_url', 'news_url', 'editor', 'press']
        return df

    def get_poster_url():
        # get the image source
        try:
                img = driver.find_element_by_xpath('//*[@id="img1"]')
                src = img.get_attribute('src')
        except:
                src = "https://newsimg.sedaily.com/2019/01/23/1VE5F3W5WP_18.png"
        return src

    data_list = []
    options = webdriver.ChromeOptions()
    options.add_argument('--headless')
    options.add_argument('--no-sandbox')
    options.add_argument('--disable-dev-shm-usage')
    options.add_argument('window-size=1920x1080')
    options.add_argument("--disable-gpu")
    driver = webdriver.Chrome('./chromedriver', options=options)
    
    _url = 'https://news.naver.com/main/main.naver?mode=LSD&mid=shm&sid1='
    if news_type == 'today_main_news':
        try :
            t_url = _url + '100'
            driver.get(t_url)
            driver.implicitly_wait(2)
        except:
            pass
        for i in range(1,6):
            try:
                driver.find_element_by_xpath('//*[@id="_rankingList0"]/li['+str(i)+']/div/div/div/a[1]').click() 
                driver.implicitly_wait(2)
                data_list.append(get_news_info_df(news_type))
                driver.back()
            except:
                driver.get(t_url)

    else:
        if news_type == 'section_life' or news_type == 'section_it':
            div_n = 8
            div_n2 = 6
        else:
            div_n = 7
            div_n2 = 5
        try :
            t_url = _url + num
            driver.get(t_url)
            driver.implicitly_wait(2)
        except:
            pass
        for k in range(1, 8):
            driver.find_element_by_xpath('/html/body/div[1]/table/tbody/tr/td[2]/div/div/div['+str(div_n)+']/a['+str(k)+']').click()
            driver.implicitly_wait(2)
            for i in range(1,5):
                for j in range(1,6):
                    try:
                        driver.find_element_by_xpath('/html/body/div[1]/table/tbody/tr/td[2]/div/div/div['+str(div_n2)+']/ul['+str(i)+']/li['+str(j)+']/dl/dt[2]/a').click() 
                        driver.implicitly_wait(2)
                        data_list.append(get_news_info_df(news_type))
                        driver.back()
                    except:
                        driver.get(t_url)
                        print("noooo")
           
    driver.quit()
    return data_list

def textsum(text):
    key_sentence = []

    for news in text:
        if len(news.split('.')) < 5:
            su = "요약 불가"
            #continue
        else:
            su = summarize(news, word_count=20)
        # poporo일 경우엔??
        # summ = Pororo(task = "summarization", model = "abstractive", lang ="ko")
        # summ(news, beam=5, len_panalty = 0.6, no_repeat_ngram_size=3, top_k = 50, top_p=0.7)
        su = re.sub('\n', ' ', su)
        if len(su) == 0:
            su = "요약 불가"
            #continue
        key_sentence.append(su)

    # print(key_sentence)

    df2 = pd.DataFrame(key_sentence, columns = ['news_sum'])

    return df2



def main(args):
        num_cpu = multiprocessing.cpu_count() - 1
        start_time = datetime.datetime.now()
        print("Start Time :", start_time)

        result = []
        for (t,num) in news_type_list:
            result += crawling(t, num)

        end_time = datetime.datetime.now()
        all_data = pd.concat(result).reset_index(drop=True)

        print(start_time.strftime("%Y%m%d-%H") + ', ' + str(all_data.shape) + ', 크롤링을 완료했습니다.')


        # #pororo로 ner 분석
        ner = Pororo(task="ner", lang="ko")
        text = []

        for i in range(10):
            text += [ner(all_data['contents'][i])]

        # print(len(text))

        ner_list = []
        tag_list = []
        for i in range(10):
            for word, tag in text[i]:
                if tag in ['PERSON', 'CIVILIZATION','DATE', 'COUNTRY', 'OCCUPATION']:
                    ner_list.append(word)
                    tag_list.append(tag)

        # db_main_key = np.unique(ner_list)  
        # b = np.array2string(db_main_key)  # 디비 저장str로 저장
        #print(len(np.unique(ner_list)))  # 총 갯수 확인
        # tag_list

        counts = Counter(ner_list)
        # count_list = list(counts.values())
        # count_str = ','.join(count_list)  # 디비 저장
        tags = counts.most_common(30)

        wc = WordCloud(background_color="white", max_font_size=60, font_path = './font/BMHANNAPro.ttf')
        cloud = wc.generate_from_frequencies(dict(tags))
        plt.figure(figsize=(10, 8))
        plt.axis('off')
        plt.imshow(cloud)
        plt.show()

        start_time = datetime.datetime.now()
        file_name = start_time.strftime("%Y%m%d")

        plt.savefig('visual_img/'+file_name)  # today visualization 저장

        # text sum
        all_data['news_sum'] = textsum(all_data['contents'])
        #textsum 의 데이터 합치기
        all_data.to_csv(os.path.join(BASE_DIR, DATA_DIR, start_time.strftime("%Y%m%d-%H") + '.csv', ), encoding='utf-8' ,index=False, mode='w')
        print("End Date :", end_time)



if __name__ == "__main__":
        PARSER = argparse.ArgumentParser()
        ARGS = PARSER.parse_args()
        main(ARGS)
