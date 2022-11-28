import pymysql
import sys
# -*- coding: utf-8 -*-

## Connect to mysql Platform
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

curs = mydb.cursor()

curs.execute("update press set intro='진실을 읽다' where press_id='경향신문';")
curs.execute("update press set intro='치우침이 없는 뉴스' where press_id='국민일보';")
curs.execute("update press set intro='더 나은 미래를 함께 만들겠습니다' where press_id='동아일보';")
curs.execute("update press set intro='대한민국 여론을 선도하는 유일석간 문화일보!' where press_id='문화일보';")
curs.execute("update press set intro='바른 보도로 미래를 밝힙니다.' where press_id='서울신문';")
curs.execute("update press set intro='세상을 보는 눈, 글로벌 미디어' where press_id='세계일보';")
curs.execute("update press set intro='Fact First 언제나 당신 손에' where press_id='조선일보';")
curs.execute("update press set intro='현장의 진실을 중앙에 두다' where press_id='중앙일보';")
curs.execute("update press set intro='더불어 행복한 세상을 만드는 언론' where press_id='한겨레';")
curs.execute("update press set intro='세상을 보는 균형' where press_id='한국일보';")
curs.execute("update press set intro='사실 앞에 겸손한 뉴스통신' where press_id='뉴스1';")
curs.execute("update press set intro='공감언론 뉴시스입니다' where press_id='뉴시스';")
curs.execute("update press set intro='내 손 안의 뉴스' where press_id='연합뉴스';")
curs.execute("update press set intro='24시간 현장을 전합니다' where press_id='연합뉴스TV';")
curs.execute("update press set intro='당신의 목소리, 뉴스A' where press_id='채널A';")
curs.execute("update press set intro='No.1 경제·증권 채널 wowtv.co.kr' where press_id='한국경제TV';")
curs.execute("update press set intro='집요한, 다채로운, 거침없는 새로운 뉴스룸이 찾아갑니다' where press_id='JTBC';")
curs.execute("update press set intro='세상을 담다 오늘을 보다' where press_id='KBS';")
curs.execute("update press set intro='당신이 뉴스입니다.' where press_id='MBC';")
curs.execute("update press set intro='중심을 지키는 저널리즘' where press_id='SBS';")
curs.execute("update press set intro='사실을 보고 진실을 말합니다.' where press_id='TV조선';")
curs.execute("update press set intro='진실을 전합니다! 진심을 다합니다! 뉴스는 YTN' where press_id='YTN';")
curs.execute("update press set intro='Make Knowledge' where press_id='매일경제';")
curs.execute("update press set intro='돈이 보이는 리얼타임 뉴스' where press_id='머니투데이';")
curs.execute("update press set intro='남 다르게, 확 다르게, 색 다르게' where press_id='비즈니스워치';")
curs.execute("update press set intro='사실을 보다, 세상을 읽다' where press_id='서울경제';")
curs.execute("update press set intro='디지털에 강한 경제미디어' where press_id='아시아경제';")
curs.execute("update press set intro='세상을 올바르게, 세상을 따뜻하게' where press_id='이데일리';")
curs.execute("update press set intro='프리미엄 경제뉴스' where press_id='조선비즈';")
curs.execute("update press set intro='1등 조세회계 경제신문' where press_id='조세일보';")
curs.execute("update press set intro='first-class 경제신문' where press_id='파이낸셜뉴스';")
curs.execute("update press set intro='성공을 부르는 습관' where press_id='한국경제';")
curs.execute("update press set intro='내 삶의 Plus, 오늘의 첫 Page' where press_id='헤럴드경제';")
curs.execute("update press set intro='진실은 노컷, 거짓은 칼컷' where press_id='노컷뉴스';")
curs.execute("update press set intro='특종에 강한 신개념 종합지' where press_id='더팩트';")
curs.execute("update press set intro='세상을 보는 눈' where press_id='데일리안';")
curs.execute("update press set intro='돈이 보이는 스페셜뉴스' where press_id='머니S';")
curs.execute("update press set intro='권력화된 언론을 감시·비판합니다.' where press_id='미디어오늘';")
curs.execute("update press set intro='IT세상, IT최강 인터넷 종합지' where press_id='아이뉴스24';")
curs.execute("update press set intro='모든 시민은 기자다' where press_id='오마이뉴스';")
curs.execute("update press set intro='관점이 있는 뉴스' where press_id='프레시안';")
curs.execute("update press set intro='독자와 함께하는 디지털데일리가 되겠습니다.' where press_id='디지털데일리';")
curs.execute("update press set intro='디지털시대 경제종합일간지' where press_id='디지털타임스';")
curs.execute("update press set intro='디지털로 미래를 보는 창' where press_id='블로터';")
curs.execute("update press set intro='대한민국을 대표하는 IT 전문 뉴스포털' where press_id='전자신문';")
curs.execute("update press set intro='IT 세상을 바꾸는 힘, ZDNet Korea' where press_id='ZDNet Korea';")
curs.execute("update press set intro='안녕하세요, 레이디경향 입니다.' where press_id='레이디경향';")
curs.execute("update press set intro='ABC협회 주간지 인증부수 1위' where press_id='매경이코노미';")
curs.execute("update press set intro='더 나은 세상을 만드는 저널리즘' where press_id='시사IN';")
curs.execute("update press set intro='사실과 진실의 등불을 밝히는 자유와 책임의 참언론' where press_id='시사저널';")
curs.execute("update press set intro='시대를 읽습니다' where press_id='신동아';")
curs.execute("update press set intro='우리의 산, 우리의 아웃도어 라이프, 모두의 월간 <산>입니다.' where press_id='월간 산';")
curs.execute("update press set intro='세상을 올바르게 세상을 따뜻하게' where press_id='이코노미스트';")
curs.execute("update press set intro='언론사의 최신 뉴스를 제공합니다.' where press_id='주간경향';")
curs.execute("update press set intro='매일 만나는 심층 뉴스' where press_id='주간동아';")
curs.execute("update press set intro='뉴스, 그 이상의 스토리를 만나다' where press_id='주간조선';")

mydb.commit()
mydb.close()
