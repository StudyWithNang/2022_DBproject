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

curs.execute("update user set my_key3 = '보안' where id = 'aheun';")
curs.execute("update user set my_key4 = '경제' where id = 'aheun';")
curs.execute("update user set my_key5 = '롤드컵' where id = 'aheun';")
curs.execute("update user set my_key6 = '컴퓨터' where id = 'aheun';")


mydb.commit()
mydb.close()
