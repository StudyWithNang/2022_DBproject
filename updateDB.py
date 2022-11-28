# -*- coding: utf-8 -*-

import pandas as pd
import pymysql
import matplotlib.pyplot as plt
import seaborn as sns
import sys
import datetime
import time
import argparse


def main(args):
    print("아래꺼 다 main에 넣기")
    sns.set()

    ## Connect to mysql Platform
    try:
        mydb = pymysql.Connect(
            user="root",
            password="111111",
            host="localhost",
            db="keya",
            charset = 'utf8'
        )
        curs = mydb.cursor()
    except pymysql.Error as e:
        # print(f"Error connecting to mysql Platform: {e}")
        sys.exit(1)


    ## read csv file
    stores_info = pd.read_csv('crawl_data/20221127-17.csv')


    ## time for news_id
    tm = time.localtime()
    year = tm.tm_year
    month = tm.tm_mon
    day = tm.tm_mday
    hour = tm.tm_hour


    ## update table: history
    print("! update history")
    history_info = stores_info.drop_duplicates(['date'], keep='last')
    print(history_info)

    for index, row in history_info.iterrows():
        tu = (row.date, 1, 2, 3)
        curs.execute("""INSERT IGNORE INTO history (date, temp, rain, dust) VALUES (%s, %s, %s, %s)""", tu)

    print("--success history--")


    ## update table: press
    print("! update press")
    press_cnt = stores_info['press'].value_counts(sort=False)
    press_info = stores_info.drop_duplicates(['press'], keep='first', ignore_index = True)
    press_info['count_pnews'] = pd.DataFrame(press_cnt.to_numpy())

    i=0

    for index, row in press_info.iterrows():
        news_id = str(year)+'_'+str(month)+'_'+str(day)+'_'+str(hour)+'_'+str(i)
        tu = (row.press, row.count_pnews, '2')
        curs.execute("""INSERT IGNORE INTO press (press_id, count_pnews, count_pgood) VALUES (%s, %s, %s)""", tu)
        i += 1

    print("--success press--")


    ## update table: editor
    print("! update editor")
    editor_cnt = stores_info['editor'].value_counts(sort=False)
    editor_info = stores_info.drop_duplicates(['editor'], keep='first', ignore_index=True)
    editor_info['count_enews'] = pd.DataFrame(editor_cnt.to_numpy())

    i=0

    for index, row in editor_info.iterrows():
        news_id = str(year)+'_'+str(month)+'_'+str(day)+'_'+str(hour)+'_'+str(i)
        tu = (row.editor, row.press, '2', row.count_enews, '4')
        curs.execute("""INSERT IGNORE INTO editor (editor_id, press_id, interest, count_enews, count_egood) VALUES (%s, %s, %s, %s, %s)""", tu)
        i += 1

    print("--success editor--")


    ## update table: raw_news
    print("! update raw_news")
    i=0

    for index, row in stores_info.iterrows():
        news_id = str(year)+'_'+str(month)+'_'+str(day)+'_'+str(hour)+'_'+str(i)+'_'+str(row.news_type)
        tu = tu = (news_id, row.title, row.all_contents, row.date, row.press, row.editor, row.image_url, row.news_type, row.news_url, row.news_sum)
        curs.execute("""INSERT IGNORE INTO raw_news (news_id, title, article, date, press_id, editor_id, image_url, category, news_url, news_sum) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)""", tu)
        i += 1

    print("--success raw_news--")


    mydb.commit()
    mydb.close()



if __name__ == "__main__":
    PARSER = argparse.ArgumentParser()
    ARGS = PARSER.parse_args()
    main(ARGS)
