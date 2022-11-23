import pandas as pd
from gensim.summarization.summarizer import summarize
import re

df = pd.read_csv('crawl_data/20221117-11.csv')  # df['contents']부분으로

key_sentence = []

for news in df['contents']:
    if len(news.split('.')) < 5:
        continue
    su = summarize(news, word_count=20)
    su = re.sub('\n', ' ', su)
    if len(su) == 0:
        continue
    # key_sentence[news] = su
    key_sentence.append(su)

# print(key_sentence)

df2 = pd.DataFrame(key_sentence, columns = ['summ'])
df2['news'] = df['contents']

df2.to_csv("20221117-11_sum.csv", index = False, encoding='utf-8-sig')

# with open("20221117-11_sum.json",'w',encoding='utf-8-sig') as f:
#     f.write(json.dumps(key_sentence))