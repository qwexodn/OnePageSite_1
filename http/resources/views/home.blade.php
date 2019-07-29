@extends('master.defaultMaster')

@section('body')
    @component('haeder.main')
    @endcomponent
    
    <div class='img-component'>
        <div class='img-content back1 height-550'>
            <div>
                <div class='title font-white-noto-900'>OnePage</div>
                <div class='sub-title font-white-noto-400'>서브 타이틀을 집어 넣을 곳 입니다.</div>
            </div>
        </div>
        <div class='alt'>
            <ul class='menu1-list'>
                <li>
                    <img src="http://wonpage.co.kr/wonpagefree/wp-content/uploads/sites/5/2014/12/wonpage-service-1.png" alt="mobile">
                    <div class='list-title'>모바일최적화</div>
                    <div class='list-body'>이것은 첫번째 예제 설명문안입니다. 사이트 방문자들에게 서비스를 소개하기 위한 핵심내용을 입력합니다.</div>
                </li>
                <li>
                    <img src="http://wonpage.co.kr/wonpagefree/wp-content/themes/wonpagefree/images/service-2.png" alt="mobile">
                    <div class='list-title'>손쉬운 관리</div>
                    <div class='list-body'>이것은 두번째 예제 설명문안입니다. 사이트 방문자들에게 서비스를 소개하기 위한 핵심내용을 입력합니다.</div>
                </li>
                <li>
                    <img src="http://wonpage.co.kr/wonpagefree/wp-content/uploads/sites/5/2014/12/wonpage-service-3.png" alt="mobile">
                    <div class='list-title'>무료 테마</div>
                    <div class='list-body'>이것은 세번째 예제 설명문안입니다. 사이트 방문자들에게 서비스를 소개하기 위한 핵심내용을 입력합니다.</div>
                </li>
            </ul>
        </div>
    </div>
    <div class='img-component'>
        <div class='img-content back2 height-550'>
            <div>
                <div class='title font-white-noto-900'>첫번째 이미지 영역</div>
                <div class='sub-title font-white-noto-400'>서브 타이틀을 집어 넣을 곳 입니다.</div>
            </div>
        </div>
        <div class='alt' style='background:#E8E885;'>
            <div class='menu2'>
                <h1 class='title content-title font-333-noto-900'>모바일 최적화</h1>
                <strong class='oneline font-333-noto-700'>“원하는 배경칼라를 선택한 후, 원하는 페이지를 불러와서 노출시킬 수 있는 영역입니다”</strong>
                <p class="body content-body font-333-noto-400">이것은 예제 페이지입니다. 페이지는 한 곳에 고정되며 사이트 네비게이션에 표시되기 때문에 블로그 글과는 다릅니다 (대부분의 테마).<br>
                    대다수의 사람들은 사이트 방문자들에게 자신들을 소개하기 위한 About 페이지부터 시작합니다.</p>
                <img src="http://wonpage.co.kr/wonpagefree/wp-content/uploads/sites/5/2014/11/무료워드프레스테마-원페이지특징-모바일최적화.png" alt="">
            </div>
        </div>
    </div>
    <div class='img-component'>
        <div class='img-content back3 height-330'>
            <div>
                <div class='title font-white-noto-900'>두번째 이미지 영역</div>
                <div class='sub-title font-white-noto-400'>서브 타이틀을 집어 넣을 곳 입니다.</div>
            </div>
        </div>
        <div class='alt'>
            <div class='menu3'>
                <h1 class='title content-title font-333-noto-900'>손쉬운 관리</h1>
                <p class='body content-body font-333-noto-400'>이것은 예제 페이지입니다. 페이지는 한 곳에 고정되며 사이트 네비게이션에 표시되기 때문에 블로그 글과는 다릅니다 (대부분의 테마).<br>
                대다수의 사람들은 사이트 방문자들에게 자신들을 소개하기 위한 About 페이지부터 시작합니다.</p>
                <img src="http://wonpage.co.kr/wonpagefree/wp-content/uploads/sites/5/2014/11/무료워드프레스테마-원페이지특징-손쉬운관리.png" alt="">
            </div>
        </div>
    </div>
    <div class='img-component'>
        <div class='img-content back4 height-330'>
            <div>
                <div class='title font-white-noto-900'>세번째 이미지 영역</div>
                <div class='sub-title font-white-noto-400'>서브 타이틀을 집어 넣을 곳 입니다.</div>
            </div>
        </div>
        <div class='alt'>
            <div class='menu4'>
                <h1 class='title content-title font-333-noto-900'>무료 테마</h1>
                <p class='body content-body font-333-noto-400'>이것은 예제 페이지입니다. 페이지는 한 곳에 고정되며 사이트 네비게이션에 표시되기 때문에 블로그 글과는 다릅니다 (대부분의 테마).<br>
                대다수의 사람들은 사이트 방문자들에게 자신들을 소개하기 위한 About 페이지부터 시작합니다.</p>
                <img src="http://wonpage.co.kr/wonpagefree/wp-content/uploads/sites/5/2014/11/무료워드프레스테마-원페이지특징-무료다운로드.png" alt="">
            </div>
        </div>
    </div>

    @component('footer.mainFooter')
    @endcomponent
@endsection
