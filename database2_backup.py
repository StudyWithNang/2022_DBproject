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
    print(f"Error connecting to mysql Platform: {e}")
    sys.exit(1)
 
# Get Cursor
curs = mydb.cursor()
 
 
# data = pd.read_csv('soho_seoul.csv', header=None) # KeyError: '상권업종대분류명'
stores_info = pd.read_csv('crawl_data/20221122-11.csv') # KeyError: '상권업종대분류명'


for index, row in stores_info.iterrows():
    # format = "%Y-%m-%d"
    # date = datetime.datetime.strptime(row.date, format)
    now = str(datetime.datetime.now())
    print(now[:10])
    tu = (row.title, now[:10])
    # print(datetime.datetime.now())
    # pre =  """INSERT IGNORE INTO raw_news (title, date) VALUES (%s, %s)"""
    curs.execute("""INSERT INTO raw_news (title, date) VALUES (%s, %s)""", tu)
    curs.fetchall()

# print(result)


query = "SELECT date FROM raw_news where date='2022-11-22'"
curs.execute(query)

# query2 = "delete from raw_news where article='" + row.article + "'"
# curs.execute(query2)
result = curs.fetchall()

#print(result)



# 결과 저장 및 데이터베이스 종료
mydb.commit()
mydb.close()
