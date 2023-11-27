{{-- @extends('layouts-school.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2" style="background-color: red;">
            <div class="card">

            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                </div>
            </div>
        </div>
        <div class="col-md-2" style="background-color: rgb(67, 240, 174);">
            <div class="card">

            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts-school.app')

@section('content')
<div class="container" style="background-color: #f8c0e0;">
    <div class="row justify-content-center">

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
                <div class="row text-total-user" style="background-color: #fff;">
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
        <div class="col-md-8">
            <div class="row">
                <label style="margin-top: 30px;">
                    <marquee scrollamount="6">
                        {{-- {{ __('Dashboard') }} --}}
                        ยินดีต้อนรับเข้าสู่เว็บไซต์ โรงเรียนโพนบกค่ะ...
                    </marquee>
                </label>

                <div class="" style="background-color: #f8c0e0;">

                    {{-- ข่าวประชาสัมพันธ์ --}}
                    <div class="row">
                        <div class="ibox-title">
                            <div style="background-color: #326283;" class="ibox-home">
                                <label class="ibox-font-title">

                                    ข่าวประชาสัมพันธ์
                                    @if (Auth::user())
                                    <button type="submit" class="btn btn-primary btn-sm" onclick="window.location.href='/view-control-new';">
                                        จัดการ
                                    </button>
                                    @else
                                    @endif

                                </label>
                                <label>
                                    <a href="{{ route('views', $type=1) }}">
                                        <label id="fontDetailAll">
                                            <img src="https://1.bp.blogspot.com/-TrFbRIsjoDc/YC9uvzbJNvI/AAAAAAAAUGM/gtKr5z2M9x0vOlHSjDHwK5FmmhJHVAIJACPcBGAYYCw/s200/arrow%2B%252828%2529.gif" width="20" height="20">
                                            อ่านทั้งหมด
                                        </label>
                                    </a>
                                </label>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-6">
                                    @if ($listContentHots->type == '1' )
                                    <div for="">
                                        <img src="/image/{{ $listContentHots->img_content }}" alt="" width="400" height="450">
                                    </div>
                                    <div class="row" id="fontContent">
                                        <label for="">{{ $listContentHots->content }}</label>
                                        <a href="{{ route('view.detail', $listContentHots->id) }}">อ่านเพิ่มเติม..</a>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    @foreach ($listContents as $listContent)
                                    @if ($listContent->type =='1')
                                        <div for="">
                                            <img src="/image/{{ $listContent->img_content }}" alt="" style="width: 265px; height: 150px;">
                                        </div>
                                        <div class="row" id="fontContent">
                                            <label for="">{{ $listContent->content }}</label>
                                            <a href="{{ route('view.detail', $listContent->id) }}">อ่านเพิ่มเติม..</a>
                                        </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ภาพกิจกรรม --}}
                    <div class="row">
                        <div class="ibox-title">
                            <div style="background-color: #326283;" class="ibox-home">
                                <label class="ibox-font-title">

                                    ภาพกิจกรรม
                                    @if (Auth::user())
                                    <button type="submit" class="btn btn-primary btn-sm" onclick="window.location.href='/view-control-new';">
                                        จัดการ
                                    </button>
                                    @else
                                    @endif
                                </label>
                                <label for="">
                                    <a href="{{ route('views', $type=2) }}">
                                        <label id="fontDetailAll">
                                            <img src="https://1.bp.blogspot.com/-TrFbRIsjoDc/YC9uvzbJNvI/AAAAAAAAUGM/gtKr5z2M9x0vOlHSjDHwK5FmmhJHVAIJACPcBGAYYCw/s200/arrow%2B%252828%2529.gif" width="20" height="20">
                                            อ่านทั้งหมด
                                        </label>
                                    </a>
                                </label>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- @foreach ($listContentHots as $listContentHot) --}}
                                        @if ($listContentHots->type == '2' )
                                        <div for="">
                                            <img src="/image/{{ $listContentHots->img_content }}" alt="" width="400" height="450">
                                        </div>
                                        <div class="row" id="fontContent">
                                            <label for="">{{ $listContentHots->content }}</label>
                                            <a href="{{ route('view.detail', $listContentHots->id) }}">อ่านเพิ่มเติม..</a>
                                        </div>
                                        @endif
                                    {{-- @endforeach --}}
                                </div>
                                <div class="col-md-6">
                                    @foreach ($listContents as $listContent)
                                    @if ($listContent->type =='2')
                                        <div for="">
                                            <img src="/image/{{ $listContent->img_content }}" alt="" style="width: 265px; height: 150px;">
                                        </div>
                                        <div class="row" id="fontContent">
                                            <label for="">{{ $listContent->content }}</label>
                                            <a href="{{ route('view.detail', $listContent->id) }}">อ่านเพิ่มเติม..</a>
                                        </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ข่าวการศึกษา --}}
                    <div class="row">
                        <div class="ibox-title">
                            <div style="background-color: #326283;" class="ibox-home">
                                <label class="ibox-font-title">

                                    ข่าวการศึกษา
                                    @if (Auth::user())
                                    <button type="submit" class="btn btn-primary btn-sm" onclick="window.location.href='/view-control-new';">
                                        จัดการ
                                    </button>
                                    @else
                                    @endif
                                </label>
                                <label for="">
                                    <a href="{{ route('views', $type=3) }}">
                                        <label id="fontDetailAll">
                                            <img src="https://1.bp.blogspot.com/-TrFbRIsjoDc/YC9uvzbJNvI/AAAAAAAAUGM/gtKr5z2M9x0vOlHSjDHwK5FmmhJHVAIJACPcBGAYYCw/s200/arrow%2B%252828%2529.gif" width="20" height="20">
                                            อ่านทั้งหมด
                                        </label>
                                    </a>
                                </label>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- @foreach ($listContentHots as $listContentHot) --}}
                                        @if ($listContentHots->type == '3' )
                                        <div for="">
                                            <img src="/image/{{ $listContentHots->img_content }}" alt="" width="400" height="450">
                                        </div>
                                        <div class="row" id="fontContent">
                                            <label for="">{{ $listContentHots->content }}</label>
                                            <a href="{{ route('view.detail', $listContentHots->id) }}">อ่านเพิ่มเติม..</a>
                                        </div>
                                        @endif
                                    {{-- @endforeach --}}
                                </div>
                                <div class="col-md-6">
                                    @foreach ($listContents as $listContent)
                                    @if ($listContent->type =='3')
                                        <div for="">
                                            <img src="/image/{{ $listContent->img_content }}" alt="" style="width: 265px; height: 150px;">
                                        </div>
                                        <div class="row" id="fontContent">
                                            <label for="">{{ $listContent->content }}</label>
                                            <a href="{{ route('view.detail', $listContent->id) }}">อ่านเพิ่มเติม..</a>
                                        </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        {{-- Layout Center End --}}

        {{-- Layout Right Start --}}
        <div class="col-md-2" style="background-color: #f8c0e0;">
            <div class="row" style="background-color: #f8c0e0;">

                {{-- Download Document Start --}}
                {{-- <div class="col-md">
                    <div class="">
                        <label class="ibox-school">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_share/images/download-th.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_share/images/edownload-th.png" alt="">
                            </a>
                        </label>
                    </div>
                </div> --}}

                {{-- Class School Start --}}
                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-223026.jpg" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-225639.png" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-225646.png" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-222202.png" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-221921.png" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-221932.png" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-221943.png" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-221954.png" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-222037.png" alt="">
                        </a>
                    </div>
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="">
                            <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200711-081141.jpg" alt="">
                        </a>
                    </div>
                    {{-- ITA Start --}}
                    <div class="ibox-school" style="margin-top: 5px;">
                        <a href="/view-ita">
                            <img src="http://www.thaischool.in.th/_files_share/images/ico_ita.png" alt="">
                        </a>
                    </div>
                </div>

                {{-- Link Start --}}
                {{-- <div class="col-md-12" >
                    <div id="menu-title-right">
                        <label class="">
                            ลิ้งค์น่าสนใจ
                        </label>
                    </div>
                    <div>
                        <div>
                            <select class="form-control" style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">หน่วยงานทางการศึกษา</option>
                            </select>
                        </div>
                        <div>
                            <select class="form-control" style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">รวมลิ้งค์ สพป.</option>
                            </select>
                        </div>
                        <div>
                            <select class="form-control" style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">รวมลิ้งค์ สพม.</option>
                            </select>
                        </div>
                        <div>
                            <select class="form-control" style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">หนังสือพิมพ์</option>
                            </select>
                        </div>
                        <div>
                            <select class="form-control" style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">หน่วยงานกรุงเทพมหานคร</option>
                            </select>
                        </div>
                    </div>
                </div> --}}

                {{-- Affiliated School Start  --}}
                <div class="col-md-12">
                    <div id="menu-title-right">
                        <label class="">
                            โรงเรียนในสังกัด
                        </label>
                    </div>
                    <div class="menu-content-right">
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_view.php?School_ID=1048190413&page=info">
                                โรงเรียนบ้านขามเตี้ยน้อย
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_view_area_service.php?School_ID=1048190409">
                                โรงเรียนบ้านนาขมิ้น
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_kru.php?School_ID=1048190416">
                                โรงเรียนบ้านอ้อวังหมากเห็บ
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_view.php?School_ID=1048190411&page=info">
                                โรงเรียนบ้านโพนเพ็ก
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_view.php?School_ID=1047540212&page=info">
                                โรงเรียนบ้านนาใน
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_view.php?School_ID=1048190412&page=info">
                                โรงเรียนบ้านขามเตี้ยใหญ่
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/emis/schooldata-view.php?School_ID=1026170044&Area_CODE=6501">
                                โรงเรียนบ้านดงวิทยาคาร
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_view_area_service.php?School_ID=1048190414">
                                โรงเรียนบ้านเหล่าบะดาโนนอุดม
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_kru_detail.php?id=75940&Area_CODE=4802&School_ID=1048190419">
                                โรงเรียนบ้านนาผักหมนาหมากแงว
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://data.bopp-obec.info/web/index_kru.php?School_ID=1048190415">
                                โรงเรียนบ้านดอนยางทุ่งน้อย
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://projects.rdpb.go.th/ideas/5432610482290688/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%95%E0%B8%B3%E0%B8%A3%E0%B8%A7%E0%B8%88%E0%B8%95%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%A7%E0%B8%99%E0%B8%8A%E0%B8%B2%E0%B8%A2%E0%B9%81%E0%B8%94%E0%B8%99%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%AB%E0%B8%99%E0%B8%AD%E0%B8%87%E0%B8%94%E0%B8%B9%E0%B9%88+%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5%E0%B8%99%E0%B8%B2%E0%B9%83%E0%B8%99++%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B9%82%E0%B8%9E%E0%B8%99%E0%B8%AA%E0%B8%A7%E0%B8%A3%E0%B8%A3%E0%B8%84%E0%B9%8C">
                                โรงเรียนตำรวจตระเวนชายแดนบ้านหนองคู่
                            </a>
                        </label>
                        <label id="menu-content-right">
                            <img src="" alt="">
                            <a href="https://www.facebook.com/bppkonrad/">
                                โรงเรียนตำรวจตระเวนชายแดนคอนราดเฮงเค็ล
                            </a>
                        </label>
                    </div>
                </div>

                {{-- From Login Start --}}
                <div class="row">
                    <div id="menu-title-right">
                        <label for="formGroupExampleInput" class="form-label">email</label>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                            {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                          </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                            {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                          </div>
                          <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        {{-- Layout Right End --}}

    </div>
</div>
@endsection

