# -*- coding: utf-8 -*- 

import pandas as pd 
import pymysql 
import matplotlib.pyplot as plt 
import seaborn as sns
import sys
import datetime
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
 
 
# data = pd.read_csv('soho_seoul.csv', header=None) # KeyError: '상권업종대분류명'
stores_info = pd.read_csv('crawl_data/20221110-03.csv') # KeyError: '상권업종대분류명'

# for index, row in stores_info.iterrows():
#     tu = (row.title,row.date)
#     pre =  """'INSERT IGNORE INTO raw_news (title, date) VALUES ({},STR_TO_DATE({}, '%Y-%m-%d'))'.format(row.title, row.date)'"""
#     print(pre)
#     #curs.execute(pre)
#     result = curs.fetchall()

# # print(result)


# query = """LOAD DATA INFILE 'crawl_data/20221110-03.csv'
query = """LOAD DATA INFILE '/var/lib/mysql-files/20221110-03.csv'
INTO TABLE raw_news
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(@news_type,@title,@date,@all_contents,@contents,@image_url,@news_url,@editor,@press)
SET news_id = 1,
    title = @title,
    date = @date;"""

# query = "SELECT date FROM raw_news"
curs.execute(query)

# query2 = "delete from raw_news where article='" + row.article + "'"
# curs.execute(query2)
curs.fetchall()

# print(result)



# 결과 저장 및 데이터베이스 종료
mydb.commit()
mydb.close()