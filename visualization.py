import pandas as pd
import numpy as np
from pororo import Pororo
from wordcloud import WordCloud
from collections import Counter
import matplotlib.pyplot as plt


#데이터프레임 조회하기
# df.head(n) : 앞 부분 n개만 보기
# df.tail(n) : 뒷 부분 n개만 보기
# df['열이름'] : 해당되는 열을 확인

#외부 데이터 읽기
df = pd.read_csv('crawl_data/20221114-02.csv')  # df['contents']부분으로
#print(df) #자동으로 인덱스 부여 확인 가능
#csv pandas없이 읽기
# with open(./trian.cs) as csvfile:
#     rdr = csv.DictReader(csvfile)
#     for i in rdr:
#         print(i)
# print(df['contents'][0])


# #pororo로 ner 분석
ner = Pororo(task="ner", lang="ko")
text = []

for i in range(10):
    text += [ner(df['contents'][i])]

# print(len(text))

ner_list = []
for i in range(10):
    for word, tag in text[i]:
        if tag in ['PERSON', 'CIVILIZATION','DATE', 'COUNTRY', 'OCCUPATION']:
            ner_list.append(word)

np.unique(ner_list)
print(len(np.unique(ner_list)))  # 총 갯수 확인


counts = Counter(ner_list) #어케 저장하고 디비에 저장할지 고민할 것 ex)태그 따로?
tags = counts.most_common(30)

wc = WordCloud(background_color="white", max_font_size=60)
cloud = wc.generate_from_frequencies(dict(tags))
# cloud.to_file('test.jpg')
plt.figure(figsize=(10, 8))
plt.axis('off')
plt.imshow(cloud)
plt.show()

plt.savefig('visual_img/test')
