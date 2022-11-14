#-*- coding:utf-8 -*-

import pymysql

conn = pymysql.connect(host='localhost',
                       user='root',
                       password='111111',
                       db='aheun',
                       charset='utf8')

sql = "INSERT INTO test (title) VALUES ('다시 도전!!!')"
print(sql)
cursor = conn.cursor()
cursor.execute(sql)
conn.commit()
conn.close()
