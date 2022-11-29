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
from datetime import datetime
import argparse

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


# curs = mydb.cursor()
## 개인 visuallization 파일 만들기 수정!!!!!!!!!!!!!!!!!!!!!
# #pororo로 ner 분석
def wordcloud(my_ner_list, keyword, k):
    counts = Counter(my_ner_list[k])
    tags = counts.most_common(30)
    wc = WordCloud(background_color="white", max_font_size=60, font_path = './font/BMHANNAPro.ttf')
    cloud = wc.generate_from_frequencies(dict(tags))
    plt.figure(figsize=(10, 8))
    plt.axis('off')
    plt.imshow(cloud)
    plt.show()

    start_time = datetime.now()
    file_name = start_time.strftime("%Y%m%d")

    # plt.savefig('my_key_visual_img/'+file_name + '_'+ keyword[k])
    plt.savefig('my_key_visual_img/'+file_name + '_'+ keyword[k])



def key_visul(user, article, news_id, my_key1, my_key2, my_key3, my_key4, my_key5, my_key6, curs):
    keyword = [my_key1, my_key2, my_key3, my_key4, my_key5, my_key6]
    print(keyword)
    # # keyword = ['윤석열', 'ai','이재명', '보안', '롤드컵', '월드컵']
    key_news = [[], [], [], [], [], []]
    output_key_news  = [[],[],[], [], [], []]
    text = []

    ner = Pororo(task="ner", lang="ko")

    # text = ner(article)

    my_ner_list = [[],[],[],[],[],[]]  
    ## 오류나는 이유가 article은 계속도는데 다른 list가 다 차서 생기는 것 같음
    # 아니면 숫자 크게하면 왜 article이 없다는 식일까...?
    print(len(article))
    for i in range(100):
        print(i)
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
            wordcloud(my_ner_list, keyword, k)

        elif len(key_news[k]) > 6:
            output_key_news[k] = key_news[k][:6]
            wordcloud(my_ner_list, keyword, k)
        elif len(key_news[k])==0:
            pass

    # print("key_news", key_news)
    # print("output_key_news", output_key_news)


    for i in range(6):
        output = len(output_key_news[i])

        if output == 0:
            sql1 = "INSERT IGNORE INTO keyword (id, my_key) VALUES ('"+ user+ "', '"+keyword[i]+"');"
            curs.execute(str(sql1))
        elif output == 1:
            sql2 ="INSERT IGNORE INTO keyword (id, my_key, output1) VALUES ('"+ user+ "', '"+keyword[i]+"', '"+output_key_news[i][0]+"');"
            curs.execute(str(sql2))
        elif output == 2:
            sql3 ="INSERT IGNORE INTO keyword (id, my_key, output1, output2) VALUES ('"+ user+ "', '"+keyword[i]+"', '"+output_key_news[i][0]+"', '"+output_key_news[i][1]+"');"
            curs.execute(str(sql3))
        elif output == 3:
            sql4 ="INSERT IGNORE INTO keyword (id, my_key, output1, output2, output3) VALUES ('"+ user+ "', '"+keyword[i]+"', '"+output_key_news[i][0]+"', '"+output_key_news[i][1]+"', '"+output_key_news[i][2]+"');"
            curs.execute(str(sql4))  
        elif output == 4:
            sql5 ="INSERT IGNORE INTO keyword (id, my_key, output1, output2, output3, output4) VALUES ('"+ user+ "', '"+keyword[i]+"', '"+output_key_news[i][0]+"', '"+output_key_news[i][1]+"', '"+output_key_news[i][2]+"', '"+output_key_news[i][3]+"');"
            curs.execute(str(sql5))
        elif output == 5:
            sql6 ="INSERT IGNORE INTO keyword (id, my_key, output1, output2, output3, output4, output5) VALUES ('"+ user+ "', '"+keyword[i]+"', '"+output_key_news[i][0]+"', '"+output_key_news[i][1]+"', '"+output_key_news[i][2]+"', '"+output_key_news[i][3]+"', '"+output_key_news[i][4]+"');"
            curs.execute(str(sql6))
        elif output == 6:
            sql7 ="INSERT IGNORE INTO keyword (id, my_key, output1, output2, output3, output4, output5, output6) VALUES ('"+ user+ "', '"+keyword[i]+"', '"+output_key_news[i][0]+"', '"+output_key_news[i][1]+"', '"+output_key_news[i][2]+"', '"+output_key_news[i][3]+"', '"+output_key_news[i][4]+"', '"+output_key_news[i][5]+"');"
            curs.execute(str(sql7))
        
        print("데이터베이스 저장 완료")
        





def main(args):
    # Get Cursor
    curs = mydb.cursor()
    now = datetime.now()
    today = now.strftime('%Y-%m-%d')
    # print(today)

    # sql1 = "select news_id from raw_news where date = '" + today + "'"
    # sql2 = "select article from raw_news where date = '" + today + "'"
    first = "truncate keyword"
    curs.execute(first)
    print(today)
    sql1 = "select news_id from raw_news where date = '" + today +"'"
    sql2 = "select article from raw_news where date = '" + today +"'"
    print(sql1)
    sql3 = "select id from user"
    curs.execute(sql1)
    news_id = curs.fetchall()
    curs.execute(sql2)
    article = curs.fetchall()
    
    curs.execute(sql3)
    user_id = curs.fetchall()
    # print("전체 user: ", user_id)
    for users in user_id:
        user = users[0]
        # print("지금 user: ", user)
        sql4 = "select * from user where id ='" + user +"'"
        curs.execute(sql4)
        keys = curs.fetchall()
        # print("keys" , keys)
        my_key1 = keys[0][2]
        my_key2 = keys[0][3]
        my_key3 = keys[0][4]
        my_key4 = keys[0][5]
        my_key5 = keys[0][6]
        my_key6 = keys[0][7]
        key_visul(user, article, news_id, my_key1, my_key2, my_key3, my_key4, my_key5, my_key6, curs)
    mydb.commit()
    mydb.close()


if __name__ == "__main__":
    PARSER = argparse.ArgumentParser()
    ARGS = PARSER.parse_args()

    main(ARGS)
