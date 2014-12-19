<?php
include "../database/database.php";
$data[] = array("กระเพาะอาหาร","","");
$data[] = array("กรดไหลย้อน","","");
$data[] = array("หอบหืด","","");
$data[] = array("หลอดลมอักเสบ","","");
$data[] = array("นอนไม่หลับ","","");
$data[] = array("อัลไซเมอร์","","");
$data[] = array("สมองอักเสบ","","");
$data[] = array("กล้ามเนื้ออ่อนแรง","","");
$data[] = array("เครียด","","");
$data[] = array("เส้นเลือดหัวใจตีบตัน","","");
$data[] = array("ไข้เลือดออก","","");
$data[] = array("ไข้หวัด","","");
$data[] = array("ไข้หวัดใหญ่","","");
$data[] = array("ตาแดง","","");
$data[] = array("ตาแห้ง","","");
$data[] = array("เกาต์","","");
$data[] = array("ข้อเสื่อม","","");
$data[] = array("ข้อเข่าเสื่อม","","");
$data[] = array("โลหิตจาง","","");
$data[] = array("ปากเท้าเปื่อย","","");
$data[] = array("ท่องอืด","","");
$data[] = array("เบาหวาน","","");
$data[] = array("กระษัยโอปาติกะ","","");
$data[] = array("กระษัยกร่อน","","");
$data[] = array("เลือดเป็นพิษ","","");
$data[] = array("คางทูม","","");
$data[] = array("อาหารเป็นพิษ","มาจากเชื้อโรคที่ปะปนอยู่กับอาหารที่รับประทาน","รับประทานอาหารที่สะอาด ปรุงเสร็จใหม่ หลีกเลี่ยงการรับประทานอาหารดิบ โดยเฉพาะช่วงที่มีการระบาดของโรค");
$data[] = array("อาหารไม่ย่อย","การดื่มสุรา การรับประทานอาหารมากเกินไป ร่างกายอ่อนเพลีย พักผ่อนไม่เพียงพอ ความเคร่งเครียด การติดเชื้อภายในกาย หรือการแพ้อาหารบางชนิด","รับประทานอาหารที่สะอาด ปรุงเสร็จใหม่ หลีกเลี่ยงการรับประทานอาหารดิบ โดยเฉพาะช่วงที่มีการระบาดของโรค");
$data[] = array("ริดสีดวงทวาร","สาเหตุสำคัญของการเกิดริดสีดวงทวารคืออาการท้องผูก ทำให้ต้องออกแรงเบ่งขณะถ่ายอุจจาระมาก ความดันในช่องท้องเพิ่มสูง เมื่อเกิดซ้ำบ่อยๆ ผลคือเส้นเลือดดำเกิดโปงพองมีเลือดคั่งการเป็นริดสีดวงในที่สุด นอกจากนี้ท่านั่งย่องๆ ในการถ่าย ทำให้เส้นเลือดดำใต้เข่าพับงอ เลือดไหลเวียนกลับไปหัวใจไม่สะดวก การที่ต้องยืนหรือนั่งเป็นเวลานานๆ การดื่มสุรา การตั้งครรภ์ และการคลอด เหล่านี้สามารถทำให้อาการของโรคกำเริบหนักขึ้น","รับประทานอาหารที่สะอาด ปรุงเสร็จใหม่ หลีกเลี่ยงการรับประทานอาหารดิบ โดยเฉพาะช่วงที่มีการระบาดของโรค");
$data[] = array("ตับแข็ง","โรคตับแข็งเป็นผลเกิดจากการตับอักเสบเรื้อรัง ซึ่งเป็นสาเหตุเกิดจากเชื้อไวรัสตับอักเสบ การดื่มสุราเป็นประจำ","เลิกดื่มสุราเป็นอันขาด ปฏิบัติตัวตามคำแนะนำของแพทย์อย่างเคร่งครัด");
$data[] = array("กระเพาะอาหารอักเสบเฉียบพลัน","ส่วนใหญ่เกิดจากการรับประทานอาหารที่ระคายเคืองต่อเยื่อบุภายในระบบทางเดินอาหาร หรือการดื่มสุรามากเกินไป","ควรรับประทานอาหารให้ตรงเวลา หลีกเลี่ยงการดื่มสุรา อาหารสจัด อาหารแข็ง หากต้องท้องว่าเป็นเวลานาน มื้อต่อในควรรับประทานอาหารที่ย่อยง่ายแทน");
$data[] = array("กระเพาะอาหารอักเสบเรื้อรัง","คนส่วนใหญ่มักมีกระเพาะอาหารอักเสบเรื้อรังอยู่แฝงทั่วไป อาการเริ่มแรกของโรคนี้คือ คลื่นไส้ง่าย โดยเฉพาะขณะแปรงฟันในตอนเช้า หรือเมื่อ สูบบุหรี่หลังตื่นนอน ปวดแน่นท้อง ท้องอืด แสบร้อนท้องส่วนบน","ควรรับประทานอาหารให้ตรงเวลา หลีกเลี่ยงการดื่มสุรา อาหารสจัด อาหารแข็ง หากต้องท้องว่าเป็นเวลานาน มื้อต่อในควรรับประทานอาหารที่ย่อยง่ายแทน");
$data[] = array("หัวใจเต้นผิดจังหวะ","หัว ใจปกติของคนเราจะเต้นเป็นจังหวะและมีความแรงที่สม่ำเสมอ ในอัตตราความเร็วระหว่าง 60 – 80 ครั้ง/นาที สำหรับผู้ใหญ่ อาการหัวใจเต้นผิดจังหวะมีได้หลากหลายรูปแบบ แตกต่างกันออกไป เป็นการแลดงความผิดปกติของหัวใจเท่านั้น ไม่ใช่เป็นโรค ชนิดที่พบบ่อยมากที่สุดคือ อัตตราการเต้นเร็วกว่าปกติ ซึ่งปกติอาจพบ ได้ในภาวะมีไข้ หลังออกกำลังกายใหม่ๆ ตื่นเต้นตกใจ หลังใช้ยาบางตัวส่วนจังหวะเต้นหัวใจไม่สม่ำเสมอเร็วบ้างช้าบ้าง หรือหยุดเต้นเป็นช่วงๆ ผู้ป่วยเหล่านี้มีอาการหายในลำบาก เหงื่อออก ตาลาย และปวดหน้าอกร่วมด้วย อาการจะเป็นอยู่ชั่วระยะไม่กี่นาทีกระทั่งกลายชั่วโมง หรือ ข้ามวันก็มีไม่แน่นอน","ควรรับประทานอาหารให้ตรงเวลา หลีกเลี่ยงการดื่มสุรา อาหารสจัด อาหารแข็ง หากต้องท้องว่าเป็นเวลานาน มื้อต่อในควรรับประทานอาหารที่ย่อยง่ายแทน");
$data[] = array("ประสาทหัวใจ","แม้ขณะผู้ป่วยไม่ได้ออกกำลังกายแต่อย่างใด หัวใจกลับเต้นเร็วถึง 100 ครั้งต่อนาที และมักมีอาการเหนื่อยหอบหายในลำบาก เจ็บแปลบไต้ราวนมด้านซ้าย แต่การตรวจร่างกายกลับไม่พบความผิดปกติของการทำงานของระบบประสาทควบคุมหัวใจ มักเกิดขึ้นเมื่อมี่ความเครียดทางจิตใจเป็นอย่างมาก กลัดกลุ่มกังวลตลอดเวลา กลายเป็นอาหารเรื้อรังไป","ควรรับประทานอาหารให้ตรงเวลา หลีกเลี่ยงการดื่มสุรา อาหารสจัด อาหารแข็ง หากต้องท้องว่าเป็นเวลานาน มื้อต่อในควรรับประทานอาหารที่ย่อยง่ายแทน");
$data[] = array("ความดันโลหิตสูง","สิ่งสำคัญคือ ค่าความดันโลหิตสูงกว่าเกณฑ์ปกติ โดยที่ผู้ป่วยอาจไม่รู้สึกว่ามีอาการผิดปกติอย่างไรเลย สำหรับผู้ที่มีความดันปกติมาก่อน แต่มีอาการปวดศีรษะ ตาลาย ใจสั่น ควรจำได้รับการตรวจความดันโลหิตดู เพื่อป้องกันโรคร้ายที่แฝงอยู่ ผู้ป่วยจำนวนไม่น้อยพบความดันโลหิตสูงโดยบังเอิญ จากการตรวจร่างกายประจำปี ทั้งที่ไม่รู้สึกเจ็บป่วยอะไร เมื่อร่างกายมีความดันโลหิตสูงเป็นเวลานาน ผลที่ตามมาคือหัวใจจะโตเนื่องจากทำงานหนัก ผนังหลอดเลือดแดงแข็งตัวลงทำให้การทำงานของไตลดลง หลอดเลือดสมองขาดเลือดและแตกได้ง่ายขึ้น","ควรรับประทานอาหารให้ตรงเวลา หลีกเลี่ยงการดื่มสุรา อาหารสจัด อาหารแข็ง หากต้องท้องว่าเป็นเวลานาน มื้อต่อในควรรับประทานอาหารที่ย่อยง่ายแทน");
$data[] = array("ผนังหลอดเลือดแดงแข็ง","ปัจจัยที่ทำให้เกิดโรคผนังหลอดเลือดแดงแข็งตัว ได้แก่ โรคความดันโลหิตสูง โรคเบาหวาน ระดับไขมันในเลือดสูง การสูบบุหรี่และความเครียดทางอารมณ์","ควบคุมน้ำหนักตัวไม่ให้อ้วน หลีกเลี่ยงการรับประทานอาหารที่มีไขมันจากสัตว์มาก");
$data[] = array("ความดันโลหิตต่ำ","ผู้ที่ตื่นเช้าขึ้นมาไม่แจ่มใส อ่อนเปลี้ย ขาดสมาธิในการทำงาน รู้สึกเหนื่อยง่าย หูอื้อ ตาลาย รับประทานอาหารไม่อร่อย","ควบคุมน้ำหนักตัวไม่ให้อ้วน หลีกเลี่ยงการรับประทานอาหารที่มีไขมันจากสัตว์มาก ");
$data[] = array("หลอดเลือดดำอุดตัน","การอุตันของหลอดเลือดดำเกิดจากผนังหลอดเลือดได้รับบาดเจ็บ ส่วนประกอบของเลือดเกิดการเปลี่ยนแปลง การไหลของเลือดช้าลง จึงทำให้เลือดหนืดตกตะกอน กลายเป็นก้อนเลือดอุดตันภายในหลอดเลือดดำขึ้น","หลักเลี่ยงการยืนเป็นเวลานานๆ พยายามหาช่วงเวลานั่งลงพักสักครู่ ยกปลายขาให้สูงขึ้น ยกปลายเท้าให้สูง เพื่อช่วยการไหลเวียนกลับของเลือดดำได้สะดวกขึ้น หรือสวมถุงน่องพยุงกล้ามเนื้อช่วยในผู้ที่ต้องการยืนเดินมาก เวลานอนควรหนุนปลายเท้าให้สูง ประคบน้ำอุ่นช่วยหลังเลิกงาน");
$data[] = array("หลอดลมพอง","หากเป็นไม่มาก ผู้ป่วยอาจมีอาการไอขากเสมหะเมื่อเป็นหวัดเท่านั้น ผู้ป่วยที่อาการรุนแรงและไอเรื้อรัง เสมหะเป็นหนองจำนวนมาก อาการไอจะเป็นมากหลังตื่นนอนและลุกจากเตียงเนื่องจากหนองจะสะสมในตอนกลางคืนเป็นจำนวนมาก หายใจลำบาก กะทั่งหมดสติไป","หลักเลี่ยงการยืนเป็นเวลานานๆ พยายามหาช่วงเวลานั่งลงพักสักครู่ ยกปลายขาให้สูงขึ้น ยกปลายเท้าให้สูง เพื่อช่วยการไหลเวียนกลับของเลือดดำได้สะดวกขึ้น หรือสวมถุงน่องพยุงกล้ามเนื้อช่วยในผู้ที่ต้องการยืนเดินมาก เวลานอนควรหนุนปลายเท้าให้สูง ประคบน้ำอุ่นช่วยหลังเลิกงาน");
$data[] = array("ปอดอักเสบ","ปอดอักเสบพบบ่อยนผู้ที่มีร่างกายอ่อนแอ เช่น เด็กเล็ก คนชรา เกิดจากเชื้อโรคแบททีเรีย ไวรัส รา หรือการสำลักสิ่งแปลกปลอมเข้าสู่ปอด","การติดเชื้อทางเดินหายใจ เช่น เป็นหวัด หากไม่ได้รับการรักษาอาจลุกลามทำให้เกิดปอดอักเสบ ควรรักษาแต่เนินๆ รักษาร่างกายให้อบอุ่น พักผ่อนให้เพียงพอ");
$data[] = array("ปวดศีรษะเนื่องจากความเครียด","เกิดจากความเตรียด มีเรื่องคิดมากกังลงใจหรือพักผ่อนไม่เพียงพอ ทำให้มีการตึงของกล้ามเนื้อต้นคอและรอบๆ ศีรษะ","หลีกเลี่ยงปัจจัยที่เป็นสาเหตุของความเครียด หาเวลาสำหรับการผ่อนคลาย พักผ่อนให้เพียงพอ ฝึกทำสมาธิบ้าง");
$data[] = array("พิษสุราเรื้อรัง","ผู้ป่วยหากวันใดไม่ได้ดื่มสุรา ก็จะไม่มีกระจิตกระใจทำอะไร แต่พอเหล้าเข้าปากสักหน่อยก็กลับคึกคักมีชีวิตชีวา ดื่มจนกระทั่งเมามายเอะอะอาละวาด ไม่รู้สติ พอสร่างเมาขึ้นมาก็จำความอะไรไม่ได้ เริ่มต้นอาการเช่นเดิมอีก วนเวียนเช่นนี้ไปทุกวัน นานวันเข้าอุปนิสัยจะเปลี่ยนแปลง ขาดสมาธิในการทำงาน ประสิทธิภาพการทำงานตกต่ำจนมีปัญหา ใช้ชีวิตเรื่อยเปื่อยไร้ค่า ด้านสุขภาพผลจากการดื่มสุราเป็นประจำ พิษของแอลกอฮอล์จำทำให้เกิดโรคตับ กระเพาะอาหารอักเสบ อาการทางระบบประสาท เช่น นิ้วมือ ริมปากสั่น เป็นต้น","หลีกเลี่ยงปัจจัยที่เป็นสาเหตุของความเครียด หาเวลาสำหรับการผ่อนคลาย พักผ่อนให้เพียงพอ ฝึกทำสมาธิบ้าง");
$data[] = array("ร้อนใน","เกิดจากแปรงสีฟันกระแทก หรือกัดโดนขณะเคี้ยวอาหาร ทำให้เยื่อบุภายในปากเป็นแผล","ควรรักษาความสะอาดในช่องปากอยู่เสมอ เพื่อช่วยกระตุ้นการหายของแผล รับประทานอาหารรสจาง นิ่มและปล่อยไว้ให้เย็นสักหน่อย เพื่อลดอาการเจ็บแสบแผล-");
$data[] = array("กระเพาะปัสสาวะอักเสบ","  ในผู้หญิง จะเกิดได้ตั้งแต่วัยเด็กจนวัยสูงอายุพบมากในหญิงตั้งครรภ์ และผู้หญิงที่กลั้นปัสสาวะนานๆ ซึ่งน้ำปัสสาวะจะถูกขังอยู่ ในกระเพาะปัสสาวะเป็นปริมาตรมากขึ้น ทำให้กระเพาะปัสสาวะทำงานหนักขึ้นเมื่อถูกซ้ำเติมโดย เชื้อแบคทีเรียที่แทรกซึมเข้าไป ก็อาจทำให้เกิดการอักเสบ ผู้หญิงที่แต่งงานใหม่ หรือหลังมีเพศสัมพันธ์ อาจมีอาการขัดเบาแบบกระเพาะปัสสาวะอักเสบ สาเหตุเกิดจากการฟกช้ำจากการมีเพศสัมพันธ์ ทำให้เกิดการบวมของท่อปัสสาว ทำให้เนื้อเยื่อบริเวณนั้นติดเชื้อได้ง่าย ในผู้ชายมักจะไม่ค่อยเกิดภาวะกระเพาะปัสสาวะอักเสบ แต่ถ้าในผู้ชายที่สูงอายุ พบได้มากขึ้น อาจพบในผู้สูงอายุที่มีต่อมลูกหมากโต , ต่อมลูกหมากอักเสบ ,ได้รับการสวนปัสสาวะทำให้เกิดการอักเสบของกระเพาะ และท่อทางเดินปัสสาวะ ในเด็ก อายุที่น้อยกว่า 5 ขวบ อาจพบ อาการกระเพาะปัสสาวะอักเสบเพียง 1-2% จากความผิดปกติแต่กำเนิด ของทางเดินปัสสาวะ ในกรณีที่ผู้ป่วยเป็นเบาหวาน นิ่วในกระเพาะปัสสาวะ ต่อมลูกหมากโต หรือ ภายหลังการสวนปัสสาวะ อาจพบว่ากระเพาะปัสสาวะอักเสบจะเป็นโรคแทรกในผู้ป่วย","1. ถ่ายปัสสาวะให้เรียบร้อยก่อนการไปทำธุระข้างนอกทุกครั้ง <br>2. อย่ากลั้นปัสสาวะถ้าไม่จำเป็น <br/>3. ถ้าเริ่มมีอาการปัสสาวะแสบขัด ให้รีบดื่มน้ำมากๆ และไม่กลั้นปัสสาวะ <br/>4. ถ้าอาการปัสสาวะแสบขัดไม่ดีขึ้น ควรรีบไปปรึกษาแพทย์ หรือถ้าอาการปัสสาวะแสบขัด ร่วมกับมีไข้สูง หนาวสั่น ปวดบั้นเอว ต้องรีบไปปรึกษาแพทย์ทันที ไม่ควรซื้อยามาทานเอง . หากเป็นผู้มีโรคประจำตัวอยู่ก่อน เช่น เบาหวาน ต่อมลูกหมากโต นิ่วในทางเดินปัสสาวะ เมื่อมีอาการ ปัสสาวะบ่อยครั้ง ปัสสาวะลำบาก ปวดขัด เวลาถ่ายปัสสาวะ ต้องรีบปรึกษาแพทย์เพื่อลดอาการ แทรกซ้อนที่ตามมา <br/>");
$data[] = array("นิ่วในไต","ผู้ที่มีประวัติครอบครัวเป็นนิ่วในไต<br/>มีการติดเชื้อในทางเดินปัสสาวะ<br/>เป็นโรคไต เช่น cystic disease of kidney<br/>มีโรค เช่น hyperparathyroidism ทำให้เกิดนิ่วได้บ่อย<br/>มีสาเหตุหรือโรคทางพันธุกรรมหลายชนิดที่ทำให้เกิดนิ่วในไต<br/>การขาดน้ำจากการดื่มน้ำไม่พอ หรือออกกำลังกายมากและรับน้ำไม่เพียงพอ<br/>การติดเชื้อทางเดินปัสสาวะ<br/>การที่มีการอุดทางเดินปัสสวะ<br/>Cystinuria มีโปรตีน amino acid cystine ซึ่งไม่ละลายในปัสสาวะทำให้เกิดนิ่ว<br/>hyperoxaluria ร่างกายผลิตเกลือ oxalate ขับทางปัสสาวะมากไป<br/>Hypercalciuria เป็นโรคทางพันธุกรรมที่ร่างกายขับเกลือแคลเซี่ยมออกทางปัสสาวะมาไป<br/>hyperuricosuria มีการขับกรดยูริกในปัสสาวะมาเช่นผู้ป่วยที่เป็น โรคเกาต์ ได้รับวิตามินดีมากไป<br/>ยาบางชนิด เช่นยาขับปัสสวะ ยาแก้โรคกระเพาะที่มีเกลือแคลเซียม ยารักษาโรคเอดส์บางชนิด<br />","ให้ดื่มน้ำมากกว่าวันละ 8 แก้วหรือให้ปัสสาวะออกมากกว่าวันละ 2.5ลิตร<br/>ให้ดื่มน้ำชา กาแฟ เบียร์หรือไวน์จะป้องกันการเกิดนิ่ว<br/>การดื่มน้ำมะนาววันละแก้วจะเพิ่มระดับ citrate ซึ่งป้องกันนิ่วที่เกิดจากเกลือแคลเซียม<br/>การรับประทานแอบเปิลและน้ำองุ่นและ น้ำcranberry juiceทุกวันจะทำให้เกิดนิ่วได้<br/>ควรหลีกเลี่ยงเครื่องดื่ม Cola เนื่องจากไปลด citrate<br/>ผู้ป่วยที่มีนิ่วเป็นชนิดแคลเซี่ยมควรลดอาหารเค็มเพราะเกลือโซเดียม เนื่องจากโซเดียมไปเพิ่มการขับแคลเซียมออกทางปัสสาวะ<br/>ผู้ป่วยที่มีนิ่วเป็นเกลือแคลเซียมควรจะรับประทานอาหารที่มีแคลเซียมอย่างพอเพียง เนื่องจากแคลเซียมในอาหารจะไปจับกับ oxalate ในอาหาร");
$data[] = array("คออักเสบ","เกิดจากติดเชื้อไวรัส หรือ แบคทีเรีย คออักเสบจากไวรัส ที่พบบ่อย เช่น ไข้หวัด ไข้หวัดใหญ่ พวกนี้มักจะมีน้ำมูกใสๆ ต่อมทอนซิลไม่แดงมาก (ไม่มีหนอง) ส่วนต่อมทอนซิลอักเสบมักจะเกิดจากเชื้อแบคทีเรีย ซึ่งมีอยู่หลายชนิด โดยเฉพาะอย่างยิ่ง เชื้อ Streptococcus groug A","การป้องกันโรคคออักเสบสำคัญมาก คือ การรักษาสุขภาพให้แข็งแรง โดยการออกกำลังกายอย่างสม่ำเสมอทุกๆ วัน ทำให้ร่างกายแข็งแรงมีภูมิต้านทานโรค โดยเฉพาะอย่างยิ่ง ไวรัสหวัดลงคอ ป้องกันไม่ให้เป็นหวัดลงคอเมื่อสัมผัสผู้ป่วยที่เป็นหวัด ควรจะใช้หน้ากากกันการไอ จาม ควรล้างมือให้สะอาดทุกครั้งเมื่อสัมผัสกับผู้ป่วยโรคไข้หวัด<br/>การนอนหลับพักผ่อนให้เพียงพอมีความสำคัญมาก การตากฝนตัวเปียกชื้นแล้วอดนอน จะทำให้เป็นหวัดลงคอคออักเสบได้ง่าย การนอนเพิ่มในช่วงเวลากลางวัน หรือนอนหลับให้พอจะแข็งแรงขึ้น<br/>ดื่มน้ำมากๆ น้ำเปล่า น้ำก๊อก น้ำอุ่นๆ ดีที่สุด ดื่มวันละ 10 แก้ว ดื่มน้ำมากๆ ทำให้ไม่เจ็บคอ หลีกเลี่ยงการดื่มน้ำอัดลม เพราะว่ามีน้ำตาลมาก มีก๊าซคาร์บอนไดออกไซด์และคาร์บอเนทมาก การดื่มน้ำหวาน กินไอศกรีม กินขนมหวานๆ มากก็จะทำให้เจ็บคอ<br/>หลีกเลี่ยงหมากฝรั่ง ลูกอม ขนมอบ ขนมหวานทุกชนิด หลีกเลี่ยงการใช้เสียงตะโกนดังๆ พูดมากเกินไป หลีกเลี่ยงอากาศที่อับ เลี่ยงควันบุหรี่ งดการสูบบุหรี่ การกินเหล้า การเที่ยวกลางคืน อดนอนดึกๆ หลีกเลี่ยงอาหารเผ็ดรสจัด หลีกเลี่ยงยาที่ระคายเคืองกระเพาะอาหาร จะมีผลทำให้กระเพาะอาหารอักเสบแล้วท้นขึ้นมาที่คอหอยได้");
foreach($data as $key => $value){
	$insert = array(
		'name_disease' => $value[0],
		'cause_disease' => $value[1],
		'prevention_disease' => $value[2]
	);
	db_insert('disease', $insert);
}
?>