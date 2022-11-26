import pandas as pd 
import pymysql 
import matplotlib.pyplot as plt 
import seaborn as sns
import sys
import datetime
import time
sns.set()
 
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
    print(f"Error connecting to mysql Platform: {e}")
    sys.exit(1)
 
# Get Cursor
curs = mydb.cursor()
 
 
# data = pd.read_csv('soho_seoul.csv', header=None) # KeyError: '상권업종대분류명'
stores_info = pd.read_csv('crawl_data/20221122-11.csv') # KeyError: '상권업종대분류명'

# time for news_id
tm = time.localtime()
year = tm.tm_year
month = tm.tm_mon
day = tm.tm_mday
hour = tm.tm_hour
i=0


for index, row in stores_info.iterrows():
    news_id = str(year)+'_'+str(month)+'_'+str(day)+'_'+str(hour)+'_'+str(i)+'_'+str(row.news_type)
    i = i+1

    tu = tu = (news_id, row.title, row.all_contents, row.date, row.press, row.editor, row.image_url, row.news_type, row.news_url)

    # pre =  """INSERT IGNORE INTO raw_news (title, date) VALUES (%s, %s)"""
    curs.execute("""INSERT INTO raw_news (news_id, title, article, date, press_id, editor_id, image_url, category, news_url) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)""", tu)
    curs.fetchall()
    print("success", index, row.title)

# print(result)


#query = "SELECT date FROM raw_news"
#curs.execute(query)

# query2 = "delete from raw_news where article='" + row.article + "'"
# curs.execute(query2)
#result = curs.fetchall()

#print(result)



# 결과 저장 및 데이터베이스 종료
mydb.commit()
mydb.close()
