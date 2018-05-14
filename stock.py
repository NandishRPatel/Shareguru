from bs4 import BeautifulSoup
import urllib.request,sys
#import xlrd

code=[532628, 523395, 533292, 533412, 523204, 500002, 500488, 532682, 500410, 532762, 512599, 533096, 532727, 500303, 532840, 513335, 532683, 532331, 513349, 500710, 526707, 506235, 505885, 532480, 532749, 521070, 532309, 532664, 500008, 500425, 590006, 520077, 532282, 515055, 532418, 590062, 531683, 500013, 508869, 500877, 532475, 533159, 522275, 506074, 533163, 500101, 515030, 527001, 500477, 503940, 500820, 532493, 505029, 500027, 524804, 532797, 500674, 532215, 500034, 532977, 533229, 500031, 532978, 500032, 500490, 532382, 500102, 523319, 500038, 500039, 532525, 532134, 532149, 532674, 532694, 500042, 500043, 506285, 590106, 590096, 590103, 590104, 590108, 590109, 509480, 532430, 532930, 503960, 500048, 500049, 500493, 532454, 532609, 500103, 500055, 532523, 500335, 526612, 500067, 523457, 532678, 500020, 500530, 500547, 532929, 500825, 533304, 532321, 532792, 511196, 532483, 513375, 500870, 500878, 532885, 500280, 500040, 500084, 500085, 500110, 511243, 500087, 532210, 506390, 517326, 533278, 500830, 531344, 512199, 506395, 532179, 508814, 533144, 500092, 500093, 500480, 533151, 500096, 500097, 533160, 523367, 500117, 532608, 500645, 511072, 532848, 533137, 532121, 532772, 500119, 532180, 522163, 532839, 532526, 532488, 532868, 522261, 523618, 500124, 532751, 532927, 532922, 533055, 532696, 505200, 500125, 500840, 532322, 505700, 500128, 522074, 531162, 532178, 532700, 530323, 533261, 500133, 500495, 532787, 500134, 533704, 500630, 500135, 531508, 532684, 532876, 500086, 505790, 531599, 500469, 526881, 500144, 500940, 532809, 532843, 504067, 532938, 533400, 500620, 532155, 509550, 532959, 526367, 532622, 532345, 503699, 532285, 532312, 511676, 532716, 507815, 532715, 500676, 500660, 532296, 532672, 532181, 532754, 500670, 532734, 532424, 500164, 533150, 532980, 590095, 509488, 500300, 533282, 532786, 501455, 511288, 500690, 532951, 532775, 500160, 517300, 530001, 500173, 523477, 500171, 512579, 533248, 518029, 532702, 506480, 532708, 532662, 532770, 500467, 533162, 517354, 500179, 532281, 500010, 533230, 500180, 509631, 500292, 500182, 532129, 500183, 500440, 500696, 500186, 500104, 500189, 500185, 513599, 509627, 500188, 523398, 500191, 500193, 532873, 500187, 532799, 509675, 533244, 532174, 532835, 531524, 500116, 532822, 500106, 500850, 532544, 530005, 500201, 532636, 533122, 532832, 532960, 532814, 500207, 532514, 532305, 532187, 533154, 532777, 500209, 532175, 532659, 500210, 532706, 532851, 532388, 530965, 524494, 532947, 532479, 500305, 500875, 523610, 532881, 530773, 506943, 532644, 532940, 532209, 532705, 512237, 570004, 500219, 532532, 532627, 509715, 533207, 514034, 532617, 511034, 532624, 500227, 500378, 532642, 532286, 500380, 532162, 530007, 523405, 532508, 533148, 500228, 533155, 530019, 524826, 532926, 513250, 532714, 526209, 500233, 522259, 522287, 500165, 532652, 590003, 531687, 532899, 502937, 532747, 532967, 531269, 532924, 590097, 590112, 590107, 500247, 532400, 530813, 532997, 500255, 500510, 533519, 500251, 500252, 590069, 513605, 532778, 526596, 500253, 517518, 500257, 500520, 500260, 500265, 532720, 532756, 533088, 532313, 531213, 533204, 502157, 530011, 530543, 531642, 532500, 523704, 500271, 532654, 532629, 532865, 526235, 500126, 532850, 532819, 500279, 513377, 533286, 513446, 524084, 517140, 517334, 532892, 590115, 526299, 500290, 532376, 500109, 500108, 532921, 533398, 532991, 500294, 532234, 524816, 523630, 500730, 532555, 513023, 532504, 508989, 532649, 504112, 500790, 532798, 532529, 513683, 533098, 500304, 532541, 526371, 532481, 500672, 531209, 533106, 532880, 533632, 500312, 532944, 532391, 532466, 532837, 524372, 502420, 500315, 532827, 531349, 523574, 524689, 532780, 531120, 532517, 503031, 533179, 532522, 500680, 506590, 50310, 500331, 533107, 500302, 532366, 532254, 532810, 532898, 532524, 533178, 522205, 506022, 532718, 532748, 500338, 500459, 532647, 526801, 532693, 533295, 532461, 532891, 590099, 590110, 532497, 500339, 531500, 500355, 500359, 524230, 520111, 500330, 532805, 532106, 533143, 500111, 532712, 523445, 500325, 500390, 532399, 590100, 532939, 532915, 533172, 500366, 500368, 532955, 533470, 514304, 500113, 507315, 532663, 590098, 500112, 532886, 530075, 500295, 522034, 523598, 522175, 532638, 533180, 532670, 500387, 526049, 511218, 500550, 502742, 533206, 500472, 532784, 532221, 532218, 500285, 523756, 503806, 501061, 532200, 532191, 512531, 512299, 500900, 532374, 532531, 532872, 532733, 590071, 500403, 500404, 532711, 524715, 512179, 509930, 507892, 532667, 532276, 532515, 532390, 533200, 532790, 532301, 500483, 532540, 500408, 500800, 501301, 513434, 570001, 500570, 513010, 500470, 532371, 500770, 500400, 532755, 505400, 533158, 504966, 500411, 500413, 590005, 507205, 522113, 532966, 500114, 531426, 500420, 532779, 532928, 533540, 505854, 532356, 517506, 504973, 532691, 532800, 532343, 532505, 500148, 532538, 506690, 532477, 507878, 533171, 507458, 532478, 512070, 532432, 532746, 517146, 590101, 590102, 513216, 532619, 532917, 500465, 523261, 532953, 511389, 532401, 507880, 532757, 500575, 531807, 507410, 532144, 500238, 507685, 532795, 532300, 500095, 532648, 505537, 532794, 500780, 531335, 532883]
for i in range(50,100):
	webpage = "http://bseplus.bseindia.com/StockReach/AdvStockReach.aspx?scripcode="+str(code[i])+"&section=tab1"
	websource = urllib.request.urlopen(webpage)
	raw_data=websource.read().decode()
	data=raw_data[:]
	data1=(data.replace("BsePlus#$#"," ")).split('#@#')
	subdata1=(data1[15].replace("#SECTION#"," / ")).split("/")
	subdata2=data1[16].split("/")
	print(data1[2]+" $$$ "+data1[0]+" $$$ "+data1[13]+" $$$ "+data1[14]+" $$$ "+subdata1[0]+" $$$ "+subdata1[1]+" $$$ "+subdata1[2]+" $$$ "+subdata2[0]+" $$$ "+subdata2[1]+" ### ")

















'''webpage = "http://bseplus.bseindia.com/StockReach/AdvStockReach.aspx?scripcode="+sys.argv[1]+"&section=tab1"

websource = urllib.request.urlopen(webpage)
raw_data=websource.read().decode()

data=raw_data[:]
data1=(data.replace("BsePlus#$#"," ")).split('#@#')

print("Name : " + data1[0])
print("###")
print("Full Name : " + data1[1])
print("###")
print("Security Code : " + data1[2])
print("###")
print("Group : " + data1[3])
print("###")
print("Face Value : " + data1[4])
print("###")
print("Security ID : " + data1[5])
print("###")
print("Index : " + data1[6])
print("###")
print("Industry : " + data1[7].replace("#SECTION#",""))
print("###")
print("Current Price : " + data1[13])
print("###")
print("Change : " + data1[14])
print("###")
subdata1=(data1[15].replace("#SECTION#"," / ")).split("/")
print("Change in Percent : " + subdata1[0])
print("###")
print("High : " + subdata1[1])
print("###")
print("Low : " + subdata1[2])
print("###")
subdata2=data1[16].split("/")
print("Previous close : " + subdata2[0])
print("###")
print("Open : " + subdata2[1])
print("###")
print("Wtd. avg Price  : " + data1[17])
print("###")
print("Turnover(Cr.) : " + data1[19])
print("###")
subdata3=data1[21].split("/")
print("TTQ(Lakh) : " + subdata3[0])
print("###")
print("2W Avg Q(Lakh) : " + subdata3[1])
print("###")
print("Circuit Limits : " + data1[22])
print("###")
subdata4=data1[23].split("/")
print("Mkt. Cap. Full(Cr.) : " + subdata4[0])
print("###")
print("Mkt. Cap.F F(Cr.) : " + subdata4[1].replace("#SECTION#--",""))
print("###")
'''