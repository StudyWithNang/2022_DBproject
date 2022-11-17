import os
import schedule
import time

def autostart():
	os.system('python3 crawling4.py')

schedule.every(3).hours.do(autostart)
