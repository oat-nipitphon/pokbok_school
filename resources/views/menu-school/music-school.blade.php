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
                    เพลงโรงเรียน
                </p>
            </div>
            <div class="col-lg-8 menu-scholl-content-detail">

            </div>
        </div>
        </div>
    </div>
@endsection
