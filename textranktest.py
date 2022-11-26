import pandas as pd
from gensim.summarization.summarizer import summarize
import re
from pororo import Pororo

df = pd.read_csv('crawl_data/20221122-11.csv')  # df['contents']부분으로

key_sentence = []

for news in df['contents']:
    if len(news.split('.')) < 5:
        continue
    su = summarize(news, word_count=20)
    # summ = Pororo(task = "summarization", modal = "abstractive", lang ="ko")
    # summ(news, beam=5, len_penalty=0.6, no_repeat_ngram_size=3, top_k =50, top_p= 0.7)
    su = re.sub('\n', ' ', su)
    if len(su) == 0:
        continue
    key_sentence[news] = su
    key_sentence.append(su)

# print(key_sentence)

df2 = pd.DataFrame(key_sentence, columns = ['summ'])
df2['news'] = df['contents']

df2.to_csv("20221122-11_sum.csv", index = False, encoding='utf-8-sig')

# with open("20221117-11_sum.json",'w',encoding='utf-8-sig') as f:
#     f.write(json.dumps(key_sentence))