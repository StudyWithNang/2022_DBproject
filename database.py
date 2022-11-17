# -*- coding: utf-8 -*-

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
    # print(f"Error connecting to mysql Platform: {e}")
    sys.exit(1)

# Get Cursor
curs = mydb.cursor()



stores_info = pd.read_csv('crawl_data/20221116-11.csv')

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
    
    update_history = (row.date, '11', '22', '33')
    curs.execute("""INSERT IGNORE INTO history (date, temp, rain, dust) VALUES (%s, %s, %s, %s)""", update_history)
    tu = (news_id, row.title, row.all_contents, row.date,row.press, row.editor, 'babo', row.image_url, row.news_type)
    #tu = (row.news_type, row.title, row.all_contents, row.date,row.press, row.editor, 'babo', row.image_url, row.news_type)
    curs.execute("""INSERT INTO raw_news (news_id, title, article, date, press_id, editor_id, ner, image_url, category) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)""", tu)
    # result = curs.fetchall()
# print(result)


mydb.commit()
mydb.close()
