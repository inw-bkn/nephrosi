<?php

return [

    'externalLinks' => [
        [ 'title' => 'คณะแพทยศาสตร์ศิริราชพยาบาล', 'link' => 'https://www.si.mahidol.ac.th/th/' ],
        [ 'title' => 'สมาคมโรคไตแห่งประเทศไทย', 'link' => 'https://www.nephrothai.org/' ],
        [ 'title' => 'สมาคมปลูกถ่ายอวัยวะแห่งประเทศไทย', 'link' => 'https://transplantthai.org/' ],
        [ 'title' => 'Thai GN Registry', 'link' => 'https://thaignregistry.org/home' ],
        [ 'title' => 'Thai KDPI EPTS calculator', 'link' => 'https://www.thai-kdpi-epts.org/' ],
        [ 'title' => 'Thai cPRA calculator', 'link' => 'https://thai-cpra.org/test' ],
    ],

    'menuGroups' => [
        [
            'title' => 'เกี่ยวกับเรา',
            'subtitle' => 'เป็นผู้นำทางอายุรศาสตร์โรคไตของเอเซีย',
            'showMenu' => false,
            'menu' => [
                [ 'label' => 'ประวัติ', 'route' => '/history' ],
                [ 'label' => 'วิสัยทัศน์และพันธกิจ', 'route' => '/vision-mission' ],
                [ 'label' => 'สารจากหัวหน้าสาขาฯ', 'route' => '/message-from-chairman' ],
                [ 'label' => 'บุคลากร', 'route' => '/staffs' ],
                [ 'label' => 'ติดต่อเรา', 'route' => '/contact' ],
            ]
        ],
        [
            'title' => 'การศึกษาและบริการ',
            'subtitle' => 'ผลิตอายุรแพทย์โรคไตให้มีคุณภาพ มีความรู้ความชำนาญในวิชาชีพ มีคุณธรรม กอปรด้วยจริยธรรมที่ดีงาม และเป็นสากล',
            'showMenu' => false,
            'menu' => [
                [ 'label' => 'สมัครเรียน', 'route' => '/admission' ],
                [ 'label' => 'โครงการฝึกอบรม', 'route' => '/training-programs' ],
                [ 'label' => 'วิชาการ', 'route' => '/academic-service' ],
                [ 'label' => 'คลินิก', 'route' => '/clinics' ],
                [ 'label' => 'Club Nephro', 'route' => '/club-nephro' ],
            ]
        ],
        [
            'title' => 'งานวิจัย',
            'subtitle' => 'สร้างสรรค์งานวิจัย เพื่อความ เป็นเลิศทางด้านโรคไต เพื่อก่อให้เกิดประโยชน์สูงสุดต่อระบบสาธารณสุขของประเทศไทย',
            'showMenu' => false,
            'menu' => [
                [ 'label' => 'งานวิจัยที่กำลังดำเนินการ', 'route' => '/research/งานวิจัยที่กำลังดำเนินการ' ],
                [ 'label' => 'ผลงานวิจัยตีพิมพ์', 'route' => '/research/ผลงานวิจัยตีพิมพ์' ],
            ]
        ],
        [
            'title' => 'ความรู้สำหรับประชาชน',
            'subtitle' => 'ส่งเสริมสุขภาพ โดยยึดผู้ป่วยเป็นศูนย์กลาง บนพื้นฐานของการดูแลแบบองค์รวม',
            'showMenu' => false,
            'menu' => [
                [ 'label' => 'ความรู้เรื่องโรคไต', 'route' => '/articles?tag=ความรู้เรื่องโรคไต' ],
                [ 'label' => 'โรคไตวายเรื้อรัง', 'route' => '/articles?tag=โรคไตวายเรื้อรัง' ],
                [ 'label' => 'การเจาะไต', 'route' => '/articles?tag=การเจาะไต' ],
                [ 'label' => 'การฟอกเลือดด้วยเครื่องไตเทียม', 'route' => '/articles?tag=การฟอกเลือดด้วยเครื่องไตเทียม' ],
                [ 'label' => 'การล้างไตทางหน้าท้อง', 'route' => '/articles?tag=การล้างไตทางหน้าท้อง' ],
                [ 'label' => 'การปลูกถ่ายไต', 'route' => '/articles?tag=การปลูกถ่ายไต' ],
                [ 'label' => 'โภชนาการ', 'route' => '/articles?tag=โภชนาการ' ],
            ]
        ]
    ],

    'heroSlides' => [
        [ 'name' => 'hero1.jpeg', 'center' => true, 'right' => false, 'left' => false, 'animate' => true ],
        [ 'name' => 'hero8.jpeg', 'center' => true, 'right' => false, 'left' => false, 'animate' => false ],
        [ 'name' => 'hero2.jpeg', 'center' => true, 'right' => false, 'left' => false, 'animate' => false ],
        [ 'name' => 'hero3.jpeg', 'center' => false, 'right' => true, 'left' => false, 'animate' => false ],
        [ 'name' => 'hero4.jpeg', 'center' => true, 'right' => false, 'left' => false, 'animate' => false ],
        [ 'name' => 'hero7.jpeg', 'center' => true, 'right' => false, 'left' => false, 'animate' => false ],
        [ 'name' => 'hero5.jpeg', 'center' => true, 'right' => false, 'left' => false, 'animate' => false ],
        [ 'name' => 'hero6.jpeg', 'center' => true, 'right' => false, 'left' => false, 'animate' => false ],
    ],

    'news' => [
        [ 'img' => 'news2.jpeg', 'route' => '/articles/สารจากหัวหน้าสาขาวิชาวักกะวิทยา ศิริราชพยาบาล', 'd' => 14, 'm' => 'FEB', 'y' => 2022, 'title' => 'สารจากหัวหน้าสาขาวิชาวักกะวิทยา ศิริราชพยาบาล', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
        [ 'img' => 'news1-1.jpeg', 'route' => '/articles/รับสมัครเฟลโลว์อนุสาขาอายุรศาสตร์โรตไต ประจำปีการศึกษา 2566', 'd' => 25, 'm' => 'JAN', 'y' => 2022, 'title' => 'รับสมัครเฟลโลว์อนุสาขาอายุรศาสตร์โรตไต ประจำปีการศึกษา 2566', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
        [ 'img' => 'news3.jpeg', 'route' => '/articles/เจ้าหน้าที่สาขาฯ รับรางวัลคนดีศรีอายุรศาสตร์ประจำปี 2564', 'd' => '07', 'm' => 'DEC', 'y' => 2021, 'title' => 'เจ้าหน้าที่สาขาฯ รับรางวัลคนดีศรีอายุรศาสตร์ประจำปี 2564', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
        [ 'img' => 'news4.jpeg', 'route' => '/articles/อาจารย์ประจำสาขาฯ รับตำแหน่งนายกสมาคมคนนอนดูซีรีย์อยู่บ้าน', 'd' => 11, 'm' => 'NOV', 'y' => 2021, 'title' => 'อาจารย์ประจำสาขาฯ รับตำแหน่งนายกสมาคมคนนอนดูซีรีย์อยู่บ้าน', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
    ],

    'articles' => [
        [ 'img' => 'article1.jpeg', 'link' => '/articles/พบหมอศิริราช ลดเสี่ยง เลี่ยงโรคไต', 'title' => 'พบหมอศิริราช ลดเสี่ยง เลี่ยงโรคไต', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
        [ 'img' => 'article2.jpeg', 'link' => '/articles/พบหมอศิริราช มารู้จักโซเดียมกัน', 'title' => 'พบหมอศิริราช มารู้จักโซเดียมกัน', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
        [ 'img' => 'article5.jpeg', 'link' => '/articles/แกงฮังเล 2 สหายสำหรับผู้ป่วยโรคไต', 'title' => 'แกงฮังเล 2 สหายสำหรับผู้ป่วยโรคไต', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
        [ 'img' => 'article6.jpeg', 'link' => '/articles/พบหมอศิริราช สุขภาพไต ดูแลให้ดี', 'title' => 'พบหมอศิริราช สุขภาพไต ดูแลให้ดี', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
        [ 'img' => 'article3.jpeg', 'link' => '/articles/อาหารจานเดียว สำหรับผู้ป่วยฟอกไต', 'title' => 'อาหารจานเดียว สำหรับผู้ป่วยฟอกไต', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
        [ 'img' => 'article4.jpeg', 'link' => '/articles/ยาในโรคไตเรื้อรังและข้อปฏิบัติที่ควรทราบ', 'title' => 'ยาในโรคไตเรื้อรังและข้อปฏิบัติที่ควรทราบ', 'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' ],
    ],

    'stats' => [
        [ 'title' => 'บทความ', 'count' => 157, 'animate' => 'fade-right', 'id' => 'article-count-value' ],
        [ 'title' => 'งานวิจัยตีพิมพ์', 'count' => 278, 'animate' => 'slide-down', 'id' => 'publication-count-value' ],
        [ 'title' => 'เฟลโลว์', 'count' => 117, 'animate' => 'fade-right', 'id' => 'fellow-count-value' ],
        [ 'title' => 'Renal Biopsy', 'count' => 3401, 'animate' => 'slide-down', 'id' => 'biopsy-count-value' ],
        [ 'title' => 'Kidney Transplant', 'count' => 1602, 'animate' => 'fade-right', 'id' => 'kt-count-value' ],
    ]
];
