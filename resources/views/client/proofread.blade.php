@extends('client.layoutclient.master')

@section('title', 'Đọc thử')

@section('content')

    <!-- /container -->
    <div class="container">
    <header>
        <h1>Animated Books - Preview Book <span>with CSS 3D Transforms</span></h1>
    </header>
    <div class="component" id="scroll-wrap">
        <ul class="align">
        <li id="bookshelf" class="bookshelf">
            <figure class="book" data-book="book-1">
            <ul class="hardcover_front">
                <li>
                <div class="coverDesign red">
                    <span class="ribbon">HOT</span>
                    <h1>HTML5</h1>
                    <p>HyperText Markup Language</p>
                </div>
                </li>
                <li></li>
            </ul>
            <ul class="page">
                <li></li>
                <li class="buttons">
                <a class="btn" href="#">Preview</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="hardcover_back">
                <li></li>
                <li></li>
            </ul>
            <ul class="book_spine">
                <li></li>
                <li></li>
            </ul>
            <figcaption>
                <h1>HTML</h1>
                <span>By </span>
                <p>Ngôn ngữ đánh dấu dùng để tạo cấu trúc của trang web.</p>
            </figcaption>
            </figure>
        </li>

        <li id="bookshelf" class="bookshelf">
            <figure class="book" data-book="book-2">
            <ul class="hardcover_front">
                <li>
                <div class="coverDesign blue">
                    <h1>CSS3</h1>
                    <p>Cascading Style Sheets</p>
                </div>
                </li>
                <li></li>
            </ul>
            <ul class="page">
                <li></li>
                <li class="buttons">
                <a class="btn" href="#">Preview</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="hardcover_back">
                <li></li>
                <li></li>
            </ul>
            <ul class="book_spine">
                <li></li>
                <li></li>
            </ul>
            <figcaption>
                <h1>CSS</h1>
                <span>By </span>
                <p>Ngôn ngữ dùng để tạo kiểu cho HTML – làm cho website trông đẹp hơn.</p>
            </figcaption>
            </figure>
        </li>

        <li id="bookshelf" class="bookshelf">
            <figure class="book" data-book="book-3">
            <ul class="hardcover_front">
                <li>
                <div class="coverDesign yellow">
                    <span class="ribbon">Sale</span>
                    <h1>JAVASCRIPT</h1>
                    <p>ES6</p>
                </div>
                </li>
                <li></li>
            </ul>
            <ul class="page">
                <li></li>
                <li class="buttons">
                <a class="btn" href="#">Preview</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="hardcover_back">
                <li></li>
                <li></li>
            </ul>
            <ul class="book_spine">
                <li></li>
                <li></li>
            </ul>
            <figcaption>
                <h1>JAVASCRIPT</h1>
                <span>By </span>
                <p>Ngôn ngữ lập trình phía client dùng để thêm tính tương tác cho trang web.</p>
            </figcaption>
            </figure>
        </li>

        <li id="bookshelf" class="bookshelf">
            <figure class="book" data-book="book-4">
            <ul class="hardcover_front">
                <li>
                <div class="coverDesign purple">
                    <span class="ribbon">New</span>
                    <h1>.NET</h1>
                    <p>Microsoft</p>
                </div>
                </li>
                <li></li>
            </ul>
            <ul class="page">
                <li></li>
                <li class="buttons">
                <a class="btn" href="#">Preview</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="hardcover_back">
                <li></li>
                <li></li>
            </ul>
            <ul class="book_spine">
                <li></li>
                <li></li>
            </ul>
            <figcaption>
                <h1>.NET</h1>
                <span>By </span>
                <p> Một nền tảng phần mềm do Microsoft phát triển, hỗ trợ xây dựng ứng dụng web, desktop, mobile, game,... </p>
            </figcaption>
            </figure>
        </li>
        </ul>
    </div>
    </div>
    
    <!-- Fullscreen BookBlock -->
    <div class="bb-custom-wrapper" id="book-1">
        <div class="bb-bookblock">
        <div class="bb-item">
            <div class="bb-custom-side page-layout-3">
            <div>
                <h3>HTML5</h3>
                <p>Xuất bản năm (1998)</p>
            </div>
            </div>
            <div class="bb-custom-side page-center page-layout-3">
            <h4>Lời mở đầu</h4>
            <p>Trong thời đại công nghệ số phát triển mạnh mẽ như hiện nay, việc xây dựng và phát triển các trang web đã
                trở thành một phần không thể thiếu trong mọi lĩnh vực của đời sống – từ giáo dục, kinh doanh, giải trí cho
                đến truyền thông.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                Chapter 1 <span>HTML là gì?</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <p>HTML là viết tắt của cụm từ Hypertext Markup Language (tạm dịch là Ngôn ngữ đánh dấu siêu văn bản). </p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                Chapter 2 <span>HTML hoạt động ra sao?</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <p>Các website hoạt động như thế nào?</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                Chapter 3 <span>HTML đóng vai trò gì trong website</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <p>
                Với những ưu và khuyết điểm trên, điều đó không có nghĩa là chỉ sử dụng HTML để tạo ra một website mà HTML
                chỉ đóng một vai trò hình thành trên website. Một website chuẩn sẽ được hình thành bởi:
            </p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                <span>Mục lục</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <ul>
                <li><span>HTML là gì?</span><span class="dots"></span><span>5</span></li>
                <li><span>HTML hoạt động ra sao?</span><span class="dots"></span><span>7</span></li>
                <li><span>HTML đóng vai trò gì trong website</span><span class="dots"></span><span>15</span></li>
            </ul>
            </div>
        </div>
        </div>
        <nav>
        <a href="#" class="bb-nav-prev">Previous</a>
        <a href="#" class="bb-nav-next">Next</a>
        <a href="#" class="bb-nav-close">Close</a>
        </nav>
    </div>
    <div class="bb-custom-wrapper" id="book-2">
        <div class="bb-bookblock">
        <div class="bb-item">
            <div class="bb-custom-side page-layout-3">
            <div>
                <h3>CSS3</h3>
                <p>Xuất bản năm (1998)</p>
            </div>
            </div>
            <div class="bb-custom-side page-center page-layout-3">
            <h4>Lời mở đầu</h4>
            <p>Nếu HTML là “bộ xương” giúp định hình cấu trúc nội dung của một trang web, thì CSS (Cascading Style Sheets)
                chính là “lớp da” tạo nên vẻ ngoài hấp dẫn và sinh động cho trang đó.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                Chapter 1 <span>CSS là gì?</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <p>CSS là viết tắt của Cascading Style Sheets, nó là một ngôn ngữ được sử dụng để tìm và định dạng lại các
                phần tử được tạo ra bởi các ngôn ngữ đánh dấu (HTML). Nói ngắn gọn hơn là ngôn ngữ tạo phong cách cho trang
                web.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                Chapter 2 <span>Tại sao sử dụng CSS?</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <p>1. Giải quyết một vấn đề lớn</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                <span>Mục lục</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <ul>
                <li><span>CSS là gì?</span><span class="dots"></span><span>5</span></li>
                <li><span>Tại sao sử dụng CSS?</span><span class="dots"></span><span>7</span></li>
            </ul>
            </div>
        </div>
        </div>
        <nav>
        <a href="#" class="bb-nav-prev">Previous</a>
        <a href="#" class="bb-nav-next">Next</a>
        <a href="#" class="bb-nav-close">Close</a>
        </nav>
    </div>
    <div class="bb-custom-wrapper" id="book-3">
        <div class="bb-bookblock">
        <div class="bb-item">
            <div class="bb-custom-side page-layout-3">
            <div>
                <h3>JAVASCRIPT</h3>
                <p>Xuất bản năm (1998)</p>
            </div>
            </div>
            <div class="bb-custom-side page-center page-layout-3">
            <h4>Lời mở đầu</h4>
            <p>Trong thế giới phát triển web hiện đại, JavaScript là một trong những ngôn ngữ lập trình không thể thiếu.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                Chapter 1 <span>JavaScript là gì?</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <p>JavaScript, còn được viết tắt là JS, là một ngôn ngữ lập trình, chạy dưới dạng ngôn ngữ kịch bản phía máy
                khách trong môi trường hosting. Môi trường hosting phổ biến nhất là trình duyệt web, dùng ngôn ngữ này để
                tạo tính tương tác cho trang web.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                Chapter 2 <span>JavaScript hoạt động thế nào?</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <p>
                <strong>Đối với JavaScript phía máy khách (client-side)</strong>
            </p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                Chapter 3 <span>JavaScript được dùng để làm gì?</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <p>
                Nếu không có JavaScript, trang web sẽ chỉ có HTML và CSS. Khi đó, 90% website sẽ ở dạng tĩnh như một cuốn
                sách.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
            <h3>
                <span>Mục lục</span>
            </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
            <ul>
                <li><span>JavaScript là gì?</span><span class="dots"></span><span>5</span></li>
                <li><span>JavaScript hoạt động thế nào?</span><span class="dots"></span><span>7</span></li>
                <li><span>JavaScript được dùng để làm gì?</span><span class="dots"></span><span>15</span></li>
            </ul>
            </div>
        </div>
        </div>
        <nav>
        <a href="#" class="bb-nav-prev">Previous</a>
        <a href="#" class="bb-nav-next">Next</a>
        <a href="#" class="bb-nav-close">Close</a>
        </nav>
    </div>
    <div class="bb-custom-wrapper" id="book-4">
        <div class="bb-bookblock">
        <div class="bb-item">
            <div class="bb-custom-side page-layout-3">
            <div>
                <h3>.NET</h3>
                <p>Xuất bản năm (1998)</p>
            </div>
            </div>
            <div class="bb-custom-side page-center page-layout-3">
            <h4>Lời mở đầu</h4>
            <p>Trong kỷ nguyên số ngày nay, việc xây dựng các ứng dụng mạnh mẽ, linh hoạt và có thể mở rộng luôn là mục
                tiêu hàng đầu của các lập trình viên và doanh nghiệp. Một trong những nền tảng được tin dùng rộng rãi để
                hiện thực hóa điều đó chính là .NET – một framework phát triển phần mềm được Microsoft phát triển và duy
                trì.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
                <h3>
                    Chapter 1 <span>Giới thiệu .NET</span>
                </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
                <p>.Net là một nền tảng phát triển mã nguồn mở (open source), đa nền tảng (cross-platform), miễn phí để xây
                    dựng nhiều loại ứng dụng khác nhau.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
                <h3>
                    Chapter 2 <span>Ưu điểm của .NET Framework</span>
                </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
                <p>Hỗ trợ nhiều ngôn ngữ: .NET Framework hỗ trợ nhiều ngôn ngữ lập trình, bao gồm C#, F# và Visual Basic, cho
                    phép các nhà phát triển chọn ngôn ngữ phù hợp nhất với nhu cầu của mình trong khi vẫn được hưởng lợi từ cùng
                    một bộ thư viện và công cụ.</p>
            </div>
        </div>
        <div class="bb-item">
            <div class="bb-custom-side page-layout-1">
                <h3>
                    <span>Mục lục</span>
                </h3>
            </div>
            <div class="bb-custom-side page-layout-1">
                <ul>
                    <li><span>Giới thiệu .NET</span><span class="dots"></span><span>5</span></li>
                    <li><span>Ưu điểm của .NET Framework</span><span class="dots"></span><span>7</span></li>
                </ul>
            </div>
        </div>
        </div>
        <nav>
            <a href="#" class="bb-nav-prev">Previous</a>
            <a href="#" class="bb-nav-next">Next</a>
            <a href="#" class="bb-nav-close">Close</a>
        </nav>
    </div>

@endsection
