@extends('layouts-school.app')

@section('content')
<div class="container" style="background-color: #f8c0e0;">
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

        {{-- Layout Center Start --}}
        <div class="col-md-10">
            <div class="row">
                <label style="margin-top: 30px;">
                    <marquee scrollamount="6">
                        {{-- {{ __('Dashboard') }} --}}
                        ยินดีต้อนรับเข้าสู่เว็บไซต์ โรงเรียนโพนบกค่ะ...
                    </marquee>
                </label>

                <div class="card-body" style="background-color: #f8c0e0;">

                    {{-- ข่าวประชาสัมพันธ์ --}}
                    <div class="row">
                        <div class="ibox-title">
                            <div class="col-md-12" id="font-title-detail">
                                @if ($dataContent->type=='1')
                                    ข่าวประชาสัมพันธ์
                                    @elseif ($dataContent->type=='2')
                                    ภาพกิจกรรม
                                    @elseif ($dataContent->type=='3')
                                    ข่าวการศึกษา
                                @endif
                            </div>
                        </div>

                        <div class="ibox-content">
                            <div class="col-md-12">
                                <div class="row" style="margin-top: 30px;">
                                    <label id="fontTitleDetail">
                                        <img src="http://download.seaicons.com/icons/delacro/id/256/Help-icon.png" width="40" height="40">
                                        {{ $dataContent->title_name }}
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-md"></div>
                                    <div class="col-md-10 text-center">
                                        <label style="margin-bottom: 20px;">
                                            <img id="" src="/image/{{ $dataContent->img_content }}" alt="" width="550" height="750">
                                        </label>
                                    </div>
                                    <div class="col-md"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md"></div>
                                    <div class="col-md-10">
                                        <label style="margin-bottom: 20px;">
                                            {{ $dataContent->content }}
                                        </label>
                                        <label id="">
                                            <embed src="/files/{{ $dataContent->duc_file }}" width="850px" height="850px" />
                                        </label>
                                    </div>
                                    <div class="col-md"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-4">
                                        <label id="fontContentDetailDate">
                                            <img style="margin-right: 10px;" src="data:image/jpeg;base64,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" width="20" height="20">
                                            โพสเมื่อ : {{ $dataContent->created_at }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        {{-- Layout Center End --}}

    </div>

</div>
@endsection

