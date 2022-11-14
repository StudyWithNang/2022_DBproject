import pandas as pd
data = pd.read_csv('crawl_data/20221110-03.csv')



print(data['editor'].value_counts(sort=False))
