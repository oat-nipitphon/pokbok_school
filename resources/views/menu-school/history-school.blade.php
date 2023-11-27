@extends('layouts-school.app')
@section('content')
    <div class="row">
        {{-- Layout left Start --}}
        <div class="col-md-2" style="background-color: #f8c0e0;">
            <div class="col-md-12" style="background-color: #f8c0e0;">
                <div class="menu-title-lift">
                    <label style="margin-left: 7px;">
                        เมนูโรงเรียน
                    </label>
                </div>
                <div class="col-md-12">
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/site/images/theme/icon/2.gif" id="iconMenu">
                        <a href="/history-school" title="ประวัติโรงเรียน" style="">
                            ประวัติโรงเรียน
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/site/images/theme/icon/22.gif" id="iconMenu">
                        <a href="/logo-school" title="สัญลักษณ์โรงเรียน">
                            สัญลักษณ์โรงเรียน
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/site/images/theme/icon/10.gif" id="iconMenu">
                        <a href="/vision-school" title="วิสัยทัศน์ / ปรัชญา">
                            วิสัยทัศน์ / ปรัชญา
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/site/images/theme/icon/49.gif" id="iconMenu">
                        <a href="/target-school" title="พันธกิจ / เป้าหมาย">
                            พันธกิจ / เป้าหมาย
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/site/images/theme/icon/13.gif" id="iconMenu">
                        <a href="/music-school" title="เพลงโรงเรียน">
                            เพลงโรงเรียน
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/site/images/theme/icon/40.gif" id="iconMenu">
                        <a href="/courses-school" title="หลักสูตรที่เปิดสอน">
                            หลักสูตรที่เปิดสอน
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/site/images/theme/icon/24.gif" id="iconMenu">
                        <a href="/house-school" title="ทำเนียบผู้บริหาร">
                            ทำเนียบผู้บริหาร
                        </a>
                    </label>
                </div>
            </div>
            <div class="col-md-12" style="background-color: #f8c0e0;">
                <div class="menu-title-lift">
                    <label style="margin-left: 7px;">
                        ลิงค์ที่น่าสนใจ
                    </label>
                </div>
                <div class="col-md-12">
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/images/banner/04-moe.gif" id="imgLinkLeft">
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/images/banner/17-dltv.jpg" id="imgLinkLeft">
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/images/banner/02-opec.gif" id="imgLinkLeft">
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/images/banner/03-onesqa.gif" id="imgLinkLeft">
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/images/banner/05-ksp.gif" id="imgLinkLeft">
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/images/banner/06-mict.gif" id="imgLinkLeft">
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/images/banner/09-true.jpg" id="imgLinkLeft">
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/banner/bannerkruthai.jpg" id="imgLinkLeft">
                    </label>
                    <label class="ibox-font-content">
                        <img src="http://www.thaischool.in.th/banner/thaischool.jpg" id="imgLinkLeft">
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                <div id="menu-title-lift">
                    <label style="margin-left: 7px;">
                        สถิติผู้เข้าชม
                    </label>
                </div>
                <div class="row text-total-user">
                    <div class="col-md-6">
                        เปิดเว็บไซต์
                    </div>
                    <div class="col-md-6">
                        20/10/2021
                    </div>
                    <div class="col-md-6">
                        ปรับปรุง
                    </div>
                    <div class="col-md-6">
                        31/10/2021
                    </div>
                    <script type="text/javascript">
                        if (localStorage.pagecount)
                            {
                            localStorage.pagecount=Number(localStorage.pagecount) +1;
                            }
                        else
                        {
                            localStorage.pagecount=1;
                            }
                        document.write("<div class='col-md-6'>สถิติผู้เข้าชม</div><div class='col-md-6'>"+ localStorage.pagecount+ "</div>");
                    </script>
                </div>
            </div>
        </div>
        {{-- Layout left End --}}

        <div class="col-md-10">
        <div class="col-md-12">
            <div class="menu-school-title-detail">
                <p class="p-school-title-detail">
                    ประวัตืโรงเรียน
                </p>
            </div>
            <div class="col-lg-10 menu-scholl-content-detail">
                ประวัติ ที่ตั้ง /  สภาพพื้นที่เขตบริการและกำหนดยุทธศาสตร์การพัฒนาตามนโยบาย

                ประวัติโรงเรียน
                                    โรงเรียนบ้านโพนบก ตั้งขึ้นเมื่อวันที่   1 พฤษภาคม   2481 โดย  นายสมพร  สุธรรม     นายอำเภอท่าอุเทน   เป็นผู้ก่อตั้งขึ้น
                และดำรงอยู่ด้วยเงินช่วยเหลือการประถมศึกษา ได้จัดการเรียนการสอนรวมเป็นชั้นเดียว  คือ ชั้นเตรียมประถม  ทำการสอนอยู่ที่วัดโพธิ์ตาก บ้านโพนบก
                มีจำนวนนักเรียน  98  คน  ครู  2  คน ต่อมาจำนวนนักเรียนเพิ่มมากขึ้น   นายเรียน  ไชยศล  ซึ่งดำรงตำแหน่งครูใหญ่  ในขณะนั้น
                ได้ของบประมาณพิเศษจากทางราชการเป็นเงิน 15,500 บาท  มาสร้างอาคารเรียนแบบถาวรแบบทุนสมทบ   และได้ปลูกสร้างเมื่อ    พ.ศ. 2501
                และสร้างเสร็จเรียบร้อยให้เป็นสถานที่เรียนได้เมื่อ  พ.ศ. 2502 ต่อมา  นายแสวง   ธวัชวะชุม   สมาชิกสภาผู้แทนราษฎรจังหวัดนครพนม
                ได้มอบเงินจำนวน    15,000   บาท   มาสร้างบ้านพักครู   1   หลัง

                                    ปัจจุบันโรงเรียนบ้านโพนบก  ตั้งอยู่หมู่ที่ 11  ตำบลโพนบก   อ.โพนสวรรค์    จังหวัดนครพนม    มีนักเรียน 302 คน ครู 13 คน
                พนักงานราชการ 1 คน พี่เลี้ยงเด็กอนุบาล 1 คน มีผู้อำนวยการ คือ นายกฤษณะ   นิคำ    ผู้อำนวยการโรงเรียนบ้านโพนบก   มีอาคารเรียน  จำนวน  4  หลัง
                อาคารห้องพักครู   1  หลัง   บ้านพักครูแบบเรือนแถว    1    หลัง    (  4  คูหา  )   โรงฝึกงาน  1  หลัง   ส้วม  4  หลัง    บ่อเลี้ยงปลา    1   บ่อ
                จัดการเรียนการสอนตั้งแต่     ระดับก่อนประถมศึกษา      ถึง     ระดับประถมศึกษาปีที่  6

                                         จัดตั้งและเปิดทำการสอนเมื่อวันที่  1  พฤษภาคม  2481 ได้จัดการเรียนการสอนรวมเป็นชั้นเดียว  คือ  ชั้นเตรียมประถม
                ทำการสอนอยู่ที่วัดโพธิ์ตาก  บ้านโพนบก  มีจำนวนนักเรียน  98  คน ครู  2  คน ต่อมาจำนวนนักเรียนเพิ่มมากขึ้น
                นับรวมถึงปีการศึกษา 2555   เป็นเวลา 74 ปี

                2. ที่ตั้งของโรงเรียนมีอาณาเขต ดังนี้

                โรงเรียนบ้านโพนบก   ตั้งอยู่  หมู่ที่  11   ต.โพนบก  อ. โพนสวรรค์    จ. นครพนม

                รหัสไปรษณีย์  48190   โทรศัพท์   042 - 535100

                ทิศเหนือ                ติดต่อกับ เขตอำเภอท่าอุเทน

                ทิศใต้                      ติดต่อกับ กลุ่มโรงเรียนเครือข่ายลำน้ำทวย

                ทิศตะวันออก       ติดต่อกับ อำเภอเมือง

                ทิศตะวันตก          ติดต่อกับ อำเภอศรีสงคราม

                ในเขตพื้นที่บริการประกอบด้วย  5  หมู่บ้าน  ประกอบด้วย

                                (1)  บ้านโพนบก หมู่ 2

                                (2)  บ้านโพนบก หมู่11

                                (3)  บ้านโพนเจริญ หมู่ 10

                                (4)  บ้านท่าศาลา (หมู่ 10 )

                                5)  บ้านโพนบกน้อย หมู่ 7

                3. ภาพรวมชุมชนในพื้นที่การบริหารมีสภาพปัจจุบันปัญหาและความต้องการด้านต่าง ๆ  ดังนี้

                                         สภาพของชุมชนประชากรส่วนใหญ่มีอาชีพเกษตรกรรม  ( ทำนา )   การนับถือศาสนาส่วนมากนักถือศาสนาพุทธ
                มีบางส่วนที่นับถือศาสนาคริสต์  สภาพเศรษฐกิจค่อนข้างยากจน ชุมชนมีความสัมพันธ์กับสถานศึกษาดี แต่ไม่ค่อยให้ความสำคัญกับการศึกษามากนัก
                มีการแพร่ระบาด ของยาเสพติดในกลุ่มเยาวชนน้อย แต่ประชากรส่วนใหญ่หลังฤดูเก็บเกี่ยวจะว่างงานไม่มีอาชีพเสริม ส่วนหนึ่งจะเข้าไปหางานทำในเมืองใหญ่
                ทิ้งให้ลูกอยู่กับญาติ  ทำให้เกิดปัญหาเด็กขาดความอบอุ่น  ไม่เชื่อฟังญาติที่อยู่ด้วยทำให้มีปัญหาด้านคุณธรรม  จริยธรรม
                และส่งผลต่อการเรียนของนักเรียนอยู่ในเขตบริการขององค์การบริหารส่วนตำบลโพนบก  มีพื้นที่  21 ไร่   60 ตารางวา

                การคมนาคม

                                    โรงเรียนบ้านโพนบก    ตั้งอยู่ติดริมถนนสายท่าอุเทน-กุสุมาลย์     อยู่ห่างจากตัวอำเภอโพนสวรรค์   ประมาณ  5  กิโลเมตร
                ห่างจากสำนักงานเขตพื้นที่การศึกษานครพนม เขต 2ประมาณ  63 กิโลเมตร  อยู่ห่างจากสำนักงานเขตพื้นที่การศึกษานครพนม  เขต 1 ประมาณ 40 กิโลเมตร
                มีรถโดยสารประจำทาง ผ่าน

                 สภาพทางเศรษฐกิจ
                                    สภาพของชุมชนประชากรส่วนใหญ่มีอาชีพเกษตรกรรม  ( ทำนา )      สภาพเศรษฐกิจค่อนข้างยากจน   ไม่มีอาชีพเสริม
                มีการแพร่ระบาดของยาเสพติดในกลุ่มเยาวชนน้อย แต่ประชากรส่วนใหญ่หลังฤดูเก็บเกี่ยวจะว่างงานไม่มีอาชีพเสริม จะเข้าไปหางานทำในเมืองใหญ่
                ทิ้งให้ลูกอยู่กับญาติ  ทำให้เกิดปัญหาเด็กขาดความอบอุ่นไม่เชื่อฟังญาติที่อยู่ด้วยทำให้มีผลเสียต่อการเรียนการสอน

                สภาพทางสังคม
                                         สภาพของชุมชนประชากรส่วนใหญ่มีอาชีพเกษตรกรรม  ( ทำนา ) การนับถือศาสนาส่วนมากนักถือศาสนาพุทธ มีบางส่วนที่นับถือศาสนาคริสต์
                สภาพเศรษฐกิจค่อนข้างยากจน   ชุมชนมีความสัมพันธ์กับสถานศึกษาดี   แต่ไม่ค่อยให้ความสำคัญกับการศึกษามากนัก
                มีการแพร่ระบาดของยาเสพติดในกลุ่มเยาวชนน้อย  แต่ประชากรส่วนใหญ่หลังฤดูเก็บเกี่ยวจะว่างงานไม่มีอาชีพเสริม  จะเข้าไปหางานทำในเมืองใหญ่
                ทิ้งให้ลูกอยู่กับญาติ  ทำให้เกิดปัญหาเด็กขาดความอบอุ่นไม่เชื่อฟังญาติที่อยู่ด้วยทำให้มีผลเสียต่อการเรียนการสอน  ปัจจุบันโรงเรียนบ้านโพนบก เป็นโรงเรียนขนาดกลาง
                เปิดทำการสอน 2  ระดับ คือ ระดับ ก่อนประถมศึกษา-ระดับประถมศึกษาปีที่ 6 ในรอบ 4 ปีการศึกษาที่ผ่านมา มีนักเรียนเฉลี่ยปีการศึกษาละ 306  คน

                                    ตามยุทธศาสตร์การพัฒนาการศึกษาตามนโยบายของสำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน โรงเรียนมีการบริหารจัดการศึกษา
                มีการกระจายอำนาจในการบริหารแบบมีส่วนร่วม โดยผู้บริหารครู ผู้ปกครองและชุมชน สังคม มีรูปแบบการบริหารที่มุ่งผลสัมฤทธิ์ สถานศึกษา
                มีอิสระและมีความคล่องตัวในการบริหาร ด้านงานวิชาการ งบประมาณ งานบุคคล และบริหารทั่วไป ผู้ปกครอง
                ทุกภาคส่วนของสังคม มีความเชื่อมั่นและพร้อมร่วมพัฒนาการจัดการเรียนรู้ร่วมกัน
            </div>
        </div>
        </div>
    </div>
@endsection
