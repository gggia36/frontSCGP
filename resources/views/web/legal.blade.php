@extends('layouts.layout')
@section('content')
	<link rel="stylesheet" href="{{asset('assets/css/fix-select2.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<div class="container">
	<div class="row mt-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">LEGAL</li>
			</ol>
		</nav>
	</div>
	<div class="row">
		<div class="col-12 mt-4">
			<h2 class="text-danger">LEGAL</h2>
		</div>
		
	</div>
	<div class="row">
		<div class="col-12">
			<p class="txt-privacy-policy">ข้อกำหนดการใช้งาน</p>
		</div>
		<div class="col-12">
			<p class="txt-detail-privacy">เว็บไซต์นี้ดำเนินการโดยเอสซีจี (บริษัทเอสซีจี แพคเกจจิ้ง จำกัด (มหาชน)) การใช้งานเว็บไซต์นี้ถือว่าท่านตกลงที่จะปฏิบัติตามข้อกำหนดการใช้งาน เงื่อนไข และประกาศต่าง ๆ ที่ระบุไว้ในเว็บไซต์นี้แล้ว
			การใช้ข้อมูลบนเว็บไซต์นี้

			เอสซีจีเป็นเจ้าของและเป็นผู้มีสิทธิแต่เพียงผู้เดียวในข้อมูลทั้งหมดที่ปรากฏบนเว็บไซต์นี้ไม่ว่าจะอยู่ในรูปแบบใดก็ตาม ข้อมูลทั้งหมดได้รับความคุ้มครองตามกฎหมาย ท่านสามารถเข้าถึง คัดลอก ดาวน์โหลด หรือสั่งพิมพ์ข้อมูลในเว็บไซต์นี้เพื่อการใช้งานส่วนบุคคลและการใช้งานในลักษณะที่ไม่หาประโยชน์ในเชิงพาณิชย์ ภายใต้เงื่อนไขที่ท่านไม่แก้ไข หรือลบสัญลักษณ์หรือเครื่องหมาย ที่แสดงความเป็นเจ้าของที่ปรากฏอยู่บนข้อมูลที่ท่านเข้าถึง คัดลอก ดาวน์โหลด หรือสั่งพิมพ์ นอกจากนี้ห้ามใช้ข้อมูลในเว็บไซต์นี้ในลักษณะใด ๆ ที่เป็นการแข่งขันกับเอสซีจี

			ท่านตกลงที่จะไม่รบกวนหรือพยายามรบกวนการทำงานของเว็บไซต์ไม่ว่าด้วยวิธีการใด เอสซีจีสงวนสิทธิที่จะจำกัดหรือระงับการใช้งานของท่านในเวลาใด ๆ ไม่ว่าทั้งหมดหรือบางส่วน โดยไม่ต้องแจ้งให้ทราบล่วงหน้า ทั้งนี้การระงับการใช้งานไม่ถือเป็นการสละสิทธิหรือมาตรการใด ๆ ที่เอสซีจีมีอยู่ตามกฎหมาย

			ข้อมูลบนเว็บไซต์นี้เป็นเพียงข้อมูลทั่วไป และอาจมีข้อมูลในเชิงประวัติศาสตร์ซึ่งมีไว้เพื่อการอ้างอิงเท่านั้น ข้อมูลที่ปรากฏในเว็บไซต์นี้อาจไม่ถูกต้อง ไม่สมบูรณ์ หรือไม่ตรงตามข้อเท็จจริงที่เป็นอยู่ในปัจจุบัน และท่านไม่ควรตัดสินใจดำเนินการใด ๆ โดยยึดถือตามข้อมูลที่ปรากฏในเว็บไซต์นี้แต่เพียงอย่างเดียว การใช้ข้อมูลในเว็บไซต์นี้เป็นความเสี่ยงของตัวท่านเอง และเอสซีจีมีสิทธิปรับปรุง เปลี่ยนแปลงข้อมูลที่อยู่ในเว็บไซต์ได้ตลอดเวลาโดยเป็นดุลพินิจของเอสซีจีแต่เพียงผู้เดียว

			เครื่องหมายการค้าและลิขสิทธิ์

			เอสซีจีเป็นเจ้าของข้อมูลและลิขสิทธิ์ เครื่องหมายการค้า สัญลักษณ์ เครื่องหมายบริการ และชื่อทางการค้า ไม่ว่าจดทะเบียนหรือไม่ได้จดทะเบียน ที่ปรากฏอยู่ในเว็บไซต์นี้ และส่วนประกอบอื่น ๆ ในทุก ๆ หน้าของเว็บไซต์ เอสซีจีไม่อนุญาตหรือยินยอมให้มีการใช้ข้อมูลและลิขสิทธิ์ เครื่องหมายการค้า สัญลักษณ์ เครื่องหมายบริการ และชื่อทางการค้าดังกล่าวโดยไม่ได้รับความยินยอมเป็นลายลักษณ์อักษรจากเอสซีจีหรือตามที่กำหนดไว้ในเว็บไซต์นี้

			ข้อมูลที่คุณให้ไว้ในเว็บไซต์

			ท่านรับรองและรับประกันว่าท่านเป็นเจ้าของหรือเป็นผู้มีสิทธิในข้อมูลที่ตนเองให้ไว้ และข้อมูลเหล่านั้นถูกต้อง เหมาะสม ชอบด้วยกฎหมาย และไม่เป็นการละเมิดข้อกำหนดการใช้งานใด ๆ ในเว็บไซต์นี้ และจะไม่ก่อให้เกิดความเสียหายต่อบุคคลใด ๆ และท่านจะเยียวยาความเสียหายใด ๆ ที่เอสซีจีได้รับอันเนื่องจากการใช้ข้อมูลที่ท่านให้ไว้

			ห้ามท่านอัพโหลด หรือเผยแพร่ข้อมูลที่
			i) เป็นความลับ มีเจ้าของ เป็นเท็จ หลอกลวง ดูหมิ่น หมิ่นประมาท ลามกอนาจาร ข่มขู่ ละเมิดสิทธิส่วนบุคคลหรือสิทธิในทรัพย์สินทางปัญญา หรือข้อมูลที่มีลักษณะไม่ชอบด้วยกฎหมายด้วยประการใด ๆ
			ii) อาจมีไวรัส มีลักษณะการหาเสียงทางการเมือง จดหมายลูกโซ่ หรือ spam mail นอกจากนี้ ห้ามท่านใช้อีเมล์หรือให้ข้อมูลที่บ่งบอกความเป็นตัวตนอันเป็นเท็จ ปลอมแปลงตนเองเป็นบุคคลอื่น หรือทำให้เกิดความเข้าใจผิดถึงแหล่งที่มาของข้อมูล ห้ามท่านอัพโหลดข้อมูลในลักษณะที่หาประโยชน์ในเชิงพาณิชย์ในเว็บไซต์นี้

			เอสซีจีมีสิทธิในการใช้ ทำซ้ำ แก้ไข ดัดแปลง เผยแพร่ แปล ต่อยอดผลงาน หรือจำหน่ายจ่ายแจกข้อมูลที่ท่านให้ไว้ในเว็บไซต์นี้ไปได้ทั่วโลกในรูปแบบใด ๆ ท่านอนุญาตให้เอสซีจีใช้ชื่อที่ท่านให้ไว้ที่เกี่ยวข้องกับข้อมูลนั้น ๆ ตามที่เอสซีจีต้องการ โดยเอสซีจีจะใช้ข้อมูลส่วนบุคคลทั้งหมดที่ท่านให้ไว้ในเว็บไซต์นี้ตามนโยบายความเป็นส่วนตัวของเว็บไซต์นี้

			การกระทำบนเว็บไซต์

			การใช้งานบางส่วนในเว็บไซต์อาจต้องมีการลงทะเบียนหรีอใช้รหัสผ่าน เอสซีจีมีสิทธิปฏิเสธการลงทะเบียนของท่าน หรือยกเลิกความเป็นสมาชิกและบัญชีของท่าน หรือห้ามบุคคลใดใช้เว็บไซต์นี้

			การเชื่อมต่อไปยังเว็บไซต์อื่น

			เว็บไซต์นี้อาจมี hypertext เชื่อมต่อไปยังเว็บไซต์อื่นซึ่งไม่มีความเกี่ยวข้องใด ๆ กับเอสซีจี ท่านควรตรวจสอบข้อกำหนดการใช้งานและระมัดระวังในการใช้งานเว็บไซต์นั้นๆ

			การเชื่อมต่อจากเว็บไซต์อื่นมาที่เว็บไซต์นี้

			เมื่อท่านต้องการเชื่อมต่อเว็บไซต์ของท่านมายังเว็บไซต์นี้ ให้เชื่อมต่อมาที่ www.scgpackaging.com โดยขอความยินยอมจากเอสซีจี เอสซีจีไม่อนุญาตให้ทำการเชื่อมต่อที่มีลักษณะ
			(i) การเชื่อมต่อจากเว็บไซต์ที่มีเนื้อหาที่ขัดต่อความสงบเรียบร้อย หรือศีลธรรมอันดีงาม หรือกฎหมาย
			(ii) การเชื่อมต่อที่เป็นการละเมิดลิขสิทธิ์ของเอสซีจี ด้วยวิธีการที่ทำให้เกิดความสับสนว่าเนื้อหาในเว็บไซต์ที่มีการเชื่อมต่อมาเป็นของเอสซีจี
			(iii) การเชื่อมต่อจากเว็บไซต์ที่มีเนื้อหาบิดเบือน หรือส่งผลต่อความน่าเชื่อถือของ เอสซีจี ผลิตภัณฑ์ หรือ บริการ
			(iv) การเชื่อมต่อเพื่อวัตถุประสงค์ในเชิงพาณิชย์ (การเชื่อมต่อเพื่อแสวงหาผลกำไร)

			ความหลากหลายของผลิตภัณฑ์และบริการ

			คุณสมบัติ รูปแบบ และรายละเอียดใดๆ ของผลิตภัณฑ์ และ/หรือ บริการ ที่อยู่ใน www.scgpackaging.com อาจแตกต่างจากภาพที่เห็นบนหน้าจอคอมพิวเตอร์ หรือแตกต่างกันไปตามพื้นที่หรือประเทศที่ขายหรือให้บริการ หากท่านต้องการข้อมูลของผลิตภัณฑ์ และ/หรือ บริการ กรุณาติดต่อผู้แทนจำหน่าย ร้านค้า หรือ ตัวแทนขายในพื้นที่หรือประเทศนั้น ๆ

			ข้อสงวนสิทธิ

			ในการใช้งานเว็บไซต์หรือกรณีที่ท่านดาวน์โหลดข้อมูลและส่วนประกอบใดๆ จากเว็บไซต์ ข้อมูลและส่วนประกอบดังกล่าวอาจไม่ถูกต้องสมบูรณ์ เพียงพอ เป็นปัจจุบัน เหมาะสม เชื่อถือได้ และปราศจากไวรัส, Computer Worm, Trojan House, Spyware หรือ Malware หรือเว็บไซต์มีความปลอดภัย หรือการเข้าเว็บไซต์นี้อาจจะถูกขัดจังหวะ ผิดพลาด ล่าช้า ไม่ถูกต้องครบถ้วน หรือไม่สามารถเข้าถึงระบบหรือข้อมูลในเว็บไซต์นี้ได้ ท่านตกลงรับความเสี่ยงภัยในความความสูญหาย เสียหาย ค่าใช้จ่ายที่เกิดขึ้นต่อระบบคอมพิวเตอร์ หรือเครื่องมือสื่อสาร หรือเครื่องมือและอุปกรณ์ใด ๆ ที่ใช้ในการเข้าถึงเว็บไซต์นี้ รวมตลอดถึงการสูญหายของข้อมูล รวมทั้งความเสียหายโดยอ้อมซึ่งเป็นผลมาจากการใช้งานเว็บไซต์หรือดาวน์โหลดข้อมูลและส่วนประกอบจากเว็บไซต์

			ข้อจำกัดความรับผิด

			กรณีที่มีความเสียหายใด ๆ รวมถึง ความสูญหาย เสียหาย หรือค่าใช้จ่ายที่เกิดขึ้น ไม่ว่าโดยตรงหรือโดยอ้อม หรือเป็นผลสืบเนื่อง ซึ่งเกิดจากข้อมูลที่ท่านให้ไว้ในเว็บไซต์ การที่ท่านเข้าใช้เว็บไซต์ หรือเว็บไซต์ที่เชื่อมโยงกับเว็บไซต์นี้ การที่บุคคลใด ๆ ไม่สามารถเข้าใช้เว็บไซต์ได้ หรือจากการที่บุคคลภายนอกเจาะเข้าไปในระบบของเว็บไซต์ หรือที่เกิดจากความล้มเหลวในการใช้งาน ความผิดพลาด การละเว้น การหยุดชะงัก ข้อบกพร่อง ความไม่สมบูรณ์ คอมพิวเตอร์ไวรัส ถึงแม้ว่าเอสซีจีจะได้รับแจ้งว่าอาจเกิดความสูญหาย เสียหายหรือค่าใช้จ่ายดังกล่าว ท่านตกลงรับความเสี่ยงในการใช้งานเว็บไซต์นี้เอง

			การละเว้นการใช้สิทธิ

			การละเว้นไม่ใช้สิทธิ และ/หรือ การผ่อนผันการใช้สิทธิไม่ว่าส่วนหนึ่งส่วนใดของเอสซีจี ไม่ถือว่าเอสซีจีสละสิทธิตามข้อตกลงหรือเงื่อนไขข้อนั้นๆ เอสซีจียังคงสงวนสิทธิที่จะเลือกใช้สิทธิตามข้อดังกล่าวได้ต่อไป

			การติดต่อเว็บไซต์นี้

			ถ้าท่านมีคำถามหรือข้อเสนอแนะใดๆ เกี่ยวกับข้อตกลงการใช้นี้ หรือเกี่ยวกับเว็บไซต์นี้ กรุณาติดต่อที่
			Email : scgpackaging@scg.co.th
			เบอร์โทรศัพท์ : +662 586 3333, +662 586 4444
			ที่อยู่: 1 ถ.ปูนซิเมนต์ไทย บางซื่อ กทม. 10800</p>
			
		</div>
	</div>
</div>


@endsection
@section('script')
@endsection