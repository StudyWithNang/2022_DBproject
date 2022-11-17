import pandas as pd
import sys
import io	#한글처리
import pymysql 
import pandas as pd
import numpy as np
from pororo import Pororo
from wordcloud import WordCloud
from collections import Counter
import matplotlib.pyplot as plt
import datetime

sys.stdout = io.TextIOWrapper(sys.stdout.detach(), encoding='utf-8')		#한글처리
sys.stderr = io.TextIOWrapper(sys.stderr.detach(), encoding='utf-8')		#한글처리

# Connect to mysql Platform
try:
    mydb = pymysql.Connect(
        user="root",
        password="111111",
        host="localhost",
        db="keya",
        charset = 'utf8'
    )
except pymysql.Error as e:
    # print(f"Error connecting to mysql Platform: {e}")
    sys.exit(1)
 
# Get Cursor
curs = mydb.cursor()

sql1 = "select news_id from raw_news where date = '2022-11-16'"
sql2 = "select article from raw_news where date = '2022-11-16'"
curs.execute(sql1)
news_id = curs.fetchall()
curs.execute(sql2)
article = curs.fetchall()
# df = pd.read_csv('crawl_data/20221114-02.csv')  # df['contents']부분으로

# for data in article:
#     print(data)
# print(type(article))


# stores_info = pd.read_csv('crawl_data/20221116-11.csv')
# article[0].replace('(', ' ')
# article[0].replace(')',' ')
# article[0].replace(',',' ')

keyword = ['이재명', 'ai', '윤석열']
key_news = [[], [], []]
output_key_news  = [[],[],[]]
text = []


# for i in range(len(article)):
#     news = article[i]
#     # print(news)
#     for j in range(len(keyword)):
#         arg = keyword[j]
#         if arg in news[0]:
#             key_news[j].append(news_id[i][0])

# for k in range(len(keyword)):
#     if len(key_news[k]) > 0 and len(key_news[k]) <= 6:
#         output_key_news[k] = key_news[k][:(len(key_news[k]))]
#     elif len(key_news[k]) > 6:
#         output_key_news[k] = key_news[k][:6]
#     elif len(key_news[k])==0:
#         pass
# # print(text)


## 개인 visuallization 파일 만들기 수정!!!!!!!!!!!!!!!!!!!!!
# #pororo로 ner 분석
ner = Pororo(task="ner", lang="ko")

# text = ner(article)

my_ner_list = [[],[],[]]
for i in range(10):
    news = article[i]
    text += [ner(news[0])]
    for j in range(len(keyword)):
        arg = keyword[j]
        if arg in news[0]:
            key_news[j].append(news_id[i][0])
            for word, tag in text[i]:
                if tag in ['PERSON', 'CIVILIZATION','DATE', 'COUNTRY', 'OCCUPATION']:
                    my_ner_list[j].append(word)

# print(my_ner_list)

for k in range(len(keyword)):
    if len(key_news[k]) > 0 and len(key_news[k]) <= 6:
        output_key_news[k] = key_news[k][:(len(key_news[k]))]

        counts = Counter(my_ner_list[k])
        print("6이하")
        tags = counts.most_common(30)
        wc = WordCloud(background_color="white", max_font_size=60, font_path = './font/BMHANNAPro.ttf')
        cloud = wc.generate_from_frequencies(dict(tags))
        plt.figure(figsize=(10, 8))
        plt.axis('off')
        plt.imshow(cloud)
        plt.show()

        start_time = datetime.datetime.now()
        file_name = start_time.strftime("%Y%m%d-%H")

        plt.savefig('my_key_visual_img/'+file_name + '_'+ keyword[k])
    elif len(key_news[k]) > 6:
        output_key_news[k] = key_news[k][:6]
        counts = Counter(my_ner_list[k])
        print("6이상")
        tags = counts.most_common(30)
        wc = WordCloud(background_color="white", max_font_size=60, font_path = './font/BMHANNAPro.ttf')
        cloud = wc.generate_from_frequencies(dict(tags))
        plt.figure(figsize=(10, 8))
        plt.axis('off')
        plt.imshow(cloud)
        plt.show()

        start_time = datetime.datetime.now()
        file_name = start_time.strftime("%Y%m%d-%H")

        plt.savefig('my_key_visual_img/'+file_name + '_' +keyword[k])
    elif len(key_news[k])==0:
        pass


# for i in range(len(my_ner_list)):
#     counts = Counter(my_ner_list[i])
#     tags = counts.most_common(30)
#     wc = WordCloud(background_color="white", max_font_size=60, font_path = './font/BMHANNAPro.ttf')
#     cloud = wc.generate_from_frequencies(dict(tags))
#     plt.figure(figsize=(10, 8))
#     plt.axis('off')
#     plt.imshow(cloud)
#     plt.show()

#     start_time = datetime.datetime.now()
#     file_name = start_time.strftime("%Y%m%d-%H")

#     plt.savefig('my_key_visual_img/'+file_name + keyword[i])