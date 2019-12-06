<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Home Page | boomsocial
    </title>
    <!--
       ===========META====================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!--===========META====================-->
    <!--===========STYLE====================-->
    <link rel="stylesheet" type="text/css" href="css/material-icon.css">
    <link href="images/favicon.ico" type="image/x-icon" rel="icon"/>
    <link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="css/min-css.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header-zing.css"
    <!--===========END STYLE====================-->
    <!--===========SCRIPT====================-->
<!--    <script type="text/javascript" src="js/provinceVi.js"></script>-->
    <!--===========END SCRIPT====================-->
</head>
<body class="default-body" id="page_home-index">
<header id="boom-header" class="scrollfixed">
    <div class="page-wrapper">
        <h1 class="logo">
            <img src="images/logo.png">
        </h1>
        <nav class="category-menu">
            <ul>
                <li class="parent thoi-su ">
                    <a href="/thoi-su.html">Trang chủ</a>
                </li>
                <li class="parent phap-luat ">
                    <a href="/phap-luat.html">Tra cứu</a>
                </li>
            </ul>
        </nav>
        <div class="toolbox">
            <div class="searchform-wrap">
                <form name="search" id="searchbox" class="pageSearch">
                    <input type="text" name="s" id="search_keyword" placeholder="Nhập nội dung cần tìm...">
                    <button type="submit" id="search_button">
                        <span class="znews-icon ti-search"></span>
                    </button>
                </form>
            </div>
            <a href="#" class="notification">
                <span class="znews-icon ti-user"></span>
            </a>
            <a class="version" href="#">M</a>
        </div>
    </div>
</header>
<div class="container " id="content-wrapper">
    <div class="row">
        <div id="leftnav" class="sl-rsp-modal col-md-3" data-keyboard="false" data-backdrop="static">
            <div class="visible-xs visible-sm closeButton">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="bar-content">
                <div id="browse">
                    <div class="summary-info p_15">
                        <a href="/users/view/6" class="no-ajax">
                            <img src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?3420"
                                 prefix="50_square" class="ava_home" width="50" alt=""/> </a>
                        <div class="user-info-home">
                            <h3 class="info-home-name" style="padding: 0px;">
                                <a class="no-ajax" href="/users/view/6">Đức Khánh
                                </a>
                            </h3>
                            <a class="no-ajax" href="/users/profile">Sửa hồ sơ</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <ul class="list2 block-body menu_top_list">
                        <li>
                            <a id="notifications" data-url="/notifications/ajax_show/home" rel="home-content"
                               href="/home/index/tab:notifications">
                                <i class="material-icons">notifications</i> Thông báo
                                <span id="notification_count" class="badge_counter">0</span>
                            </a>
                        </li>
                        <li>
                            <a id="my-photos" data-url="/albums/browse/home" rel="home-content"
                               href="/home/index/tab:my-photos">
                                <i class="material-icons">photo</i> Khách hàng của tôi
                                <spanlist6 comment_wrapper class="badge_counter">6</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="center" class="col-md-6">
            <div class="p_l_7 home_content_feed">
                <div id="home-content">
                    <div class="p_l_7 check-home">
                        <div class="home_user">
                            <div id="status_box" class="statusHome">
                                <div class="mo_breadcrumb">
                                    <h1>Có gì mới?</h1>
                                </div>
                                <form id="wallForm">
                                    <div class="form-feed-holder">
                                        <div class="post-status">
                                            <textarea name="messageText" placeholder="Nội dung" id="message"></textarea>
                                            <div id="message-emoji" class="emoji-toggle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stt-action">
                                        <form>
                                            <input type="text" placeholder="Email">
                                            <input type="text" placeholder="số điện thoại">
                                            <div class="D2pYo" data-reactid="189"><label for="province"
                                                                                         data-reactid="190"><span
                                                            data-reactid="191">Địa chỉ</span><span
                                                            style="color:red;margin-left:2px;"
                                                            data-reactid="192">*</span></label>
                                                <div class="D2pYo" data-reactid="193">
                                                    <div class="_1Nm_E" data-reactid="194">
                                                        <div data-reactid="195"><select name="province" class="_2K5yV"
                                                                                        data-reactid="196">
                                                                <option selected="" value="" data-reactid="197">Tỉnh/
                                                                    Thành phố
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b09"
                                                                        data-reactid="198">TP Hà Nội
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b0a"
                                                                        data-reactid="199">TP Hồ Chí
                                                                    Minh
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b0b"
                                                                        data-reactid="200">An Giang
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b0c"
                                                                        data-reactid="201">Bà Rịa -
                                                                    Vũng Tàu
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b0d"
                                                                        data-reactid="202">Bắc Kạn
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b0e"
                                                                        data-reactid="203">Bắc Giang
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b0f"
                                                                        data-reactid="204">Bạc Liêu
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b10"
                                                                        data-reactid="205">Bắc Ninh
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b11"
                                                                        data-reactid="206">Bến Tre
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b12"
                                                                        data-reactid="207">Bình Định
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b13"
                                                                        data-reactid="208">Bình Dương
                                                                </option>
                                                                <option value="59cdc41a9d2a1700271c2b14"
                                                                        data-reactid="209">Bình Phước
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b15"
                                                                        data-reactid="210">Bình Thuận
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b16"
                                                                        data-reactid="211">Cà Mau
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b17"
                                                                        data-reactid="212">TP Cần Thơ
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b18"
                                                                        data-reactid="213">Cao Bằng
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b19"
                                                                        data-reactid="214">TP Đà Nẵng
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b1a"
                                                                        data-reactid="215">Đăk Lăk
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b1b"
                                                                        data-reactid="216">Điện Biên
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b1c"
                                                                        data-reactid="217">Đồng Nai
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b1d"
                                                                        data-reactid="218">Đồng Tháp
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b1e"
                                                                        data-reactid="219">Gia Lai
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b1f"
                                                                        data-reactid="220">Hà Giang
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b20"
                                                                        data-reactid="221">Hà Nam
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b21"
                                                                        data-reactid="222">Hà Tĩnh
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b22"
                                                                        data-reactid="223">Hải Dương
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b23"
                                                                        data-reactid="224">TP Hải
                                                                    Phòng
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b24"
                                                                        data-reactid="225">Hòa Bình
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b25"
                                                                        data-reactid="226">Hưng Yên
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b26"
                                                                        data-reactid="227">Khánh Hòa
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b27"
                                                                        data-reactid="228">Kiên Giang
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b28"
                                                                        data-reactid="229">Kon Tum
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b29"
                                                                        data-reactid="230">Lai Châu
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b2a"
                                                                        data-reactid="231">Lâm Đồng
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b2b"
                                                                        data-reactid="232">Lạng Sơn
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b2c"
                                                                        data-reactid="233">Lào Cai
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b2d"
                                                                        data-reactid="234">Long An
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b2e"
                                                                        data-reactid="235">Nam Định
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b2f"
                                                                        data-reactid="236">Nghệ An
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b30"
                                                                        data-reactid="237">Ninh Bình
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b31"
                                                                        data-reactid="238">Ninh Thuận
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b32"
                                                                        data-reactid="239">Phú Thọ
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b33"
                                                                        data-reactid="240">Phú Yên
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b34"
                                                                        data-reactid="241">Quảng Bình
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b35"
                                                                        data-reactid="242">Quảng Nam
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b36"
                                                                        data-reactid="243">Quảng Ngãi
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b37"
                                                                        data-reactid="244">Quảng Ninh
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b38"
                                                                        data-reactid="245">Quảng Trị
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b39"
                                                                        data-reactid="246">Sóc Trăng
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b3a"
                                                                        data-reactid="247">Sơn La
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b3b"
                                                                        data-reactid="248">Tây Ninh
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b3c"
                                                                        data-reactid="249">Thái Bình
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b3d"
                                                                        data-reactid="250">Thái
                                                                    Nguyên
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b3e"
                                                                        data-reactid="251">Thanh Hóa
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b3f"
                                                                        data-reactid="252">Thừa Thiên
                                                                    Huế
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b40"
                                                                        data-reactid="253">Tiền Giang
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b41"
                                                                        data-reactid="254">Trà Vinh
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b42"
                                                                        data-reactid="255">Tuyên
                                                                    Quang
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b43"
                                                                        data-reactid="256">Vĩnh Long
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b44"
                                                                        data-reactid="257">Vĩnh Phúc
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b45"
                                                                        data-reactid="258">Yên Bái
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b46"
                                                                        data-reactid="259">Đắc Nông
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b47"
                                                                        data-reactid="260">Hậu Giang
                                                                </option>
                                                                <option value="59cdc41b9d2a1700271c2b48"
                                                                        data-reactid="261">Lưu học sinh
                                                                    đang ở nước ngoài
                                                                </option>
                                                            </select></div>
                                                    </div>
                                                    <div class="_1Nm_E" data-reactid="262">
                                                        <div data-reactid="263"><select name="district" class="_2K5yV"
                                                                                        data-reactid="264">
                                                                <option selected="" value="" data-reactid="265">Quận/
                                                                    Huyện
                                                                </option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div title="Thêm hình ảnh vào bài viết của bạn" id="select-2"></div>
                                        <!-- Hook for plugin -->
                                        <div id="commentButton_0" class="post-stt-btn">
                                            <div class="wall-post-action">
                                                <a href="" class="btn btn-action"
                                                   style="margin-bottom:3px" id="status_btn">Chia sẻ</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="clear"></div>
                            </div>
                            <ul class="list6 comment_wrapper" id="list-content">
                                <li id="activity_648">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                        </div>
                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                               data-item_id="6" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?5116"
                                                        class="img_wrapper2 user_avatar_large" alt="Đức Khánh"
                                                        title=""/></a></div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/6" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="6"><b>Đức Khánh</b>
                                                    </a>
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/6/activity_id:648" class="date"> 18 giây
                                                        Trước</a>
                                                    <span class="dropdown">
                            <a id="permission_648" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                               class="tip" href="javascript:void(0);" original-title="Chia sẻ với: Mọi người"> <i
                                        class="material-icons">public</i>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="permission_648">
                                <li><a data-privacy="1" data-activity-id="648" class="change-activity-privacy n52"
                                       href="javascript:void(0)">Mọi người</a></li>
                                <li><a data-privacy="2" data-activity-id="648" class="change-activity-privacy"
                                       href="javascript:void(0)">Chỉ bạn bè</a></li>
                            </ul>
                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_648">
                                            <div class="comment_message">
                                                hello
                                            </div>
                                            <div class="">
                                                <div class="activity_content p_photos photo_addlist">
                                                    <div class="PE">
                                                        <div class="ej">
                                                            <a class="layer_square photoModal" href=""
                                                               style="background-image:url(images/48359478_1630249830454815_589523740715384832_o.jpg)">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="QE">

                                                        <div class="sp ">
                                                            <a class="layer_square photoModal" href="">
                                                                <img src="images/26850322_1342426942570440_3789876907075289416_o.jpg"/>
                                                            </a>
                                                        </div>


                                                        <div class="sp eq">
                                                            <a class="layer_square photoModal" href="">
                                                                <img src="images/10834873_1369969266482874_3723354268052605178_o.jpg"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed_comment_info">
                                        <div class="date">
                                            <a href="javascript:void(0)" class="showCommentForm" data-id="648">
                                                <i class='material-icons'>comment</i>&nbsp;Bình luận
                                            </a>
                                            &nbsp;
                                            <a href="javascript:void(0)" data-id="648" data-type="activity"
                                               data-status="1" id="activity_l_648" class="comment-thumb likeActivity ">
                                                <i class="material-icons">thumb_up</i>
                                            </a>
                                            <a id='' href='/likes/ajax_show/activity/648' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''>
                                                <span
                                                        id="activity_like_648">0
                                                </span>
                                            </a>
                                            <a href="javascript:void(0)" data-id="648" data-type="activity"
                                               data-status="0" id="activity_d_648" class="comment-thumb likeActivity ">
                                                <i class="material-icons">thumb_down</i>
                                            </a>


                                            <a id='' href='/likes/ajax_show/activity/648/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''>
                                                <span
                                                        id="activity_dislike_648">0
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:648" class="shareFeedBtn">
                                                <i class="material-icons">share</i> Chia sẻ
                                            </a>
                                        </div>
                                        <ul class="activity_comments comment_list" id="comments_648"
                                            style="display:none">
                                            <li id="newComment_648">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link">
                                                    <img src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?1741"
                                                         class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                         title=""/>
                                                </a>
                                                <div class="comment">
                                                    <textarea name="data[commentForm_648]"
                                                              class="commentBox showCommentBtn" data-id="648"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_648"></textarea>
                                                    <div id="commentForm_648-emoji" class="emoji-toggle">

                                                    </div>
                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_648">
                                                        <input type="hidden" id="comment_image_648"/>
                                                        <div id="comment_button_attach_648">

                                                        </div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-comment"
                                                           data-activity-id="648">
                                                            <em class="material-icons">send</em>
                                                        </a>
                                                    </div>
                                                    <div id="comment_preview_image_648"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_647">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_647">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/647'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/80" prefix="50_square" tooltip="1"
                                               data-item_id="80" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/80/50_square_7d9d598ae4349745fd21821569f06346.jpg?439"
                                                        class="img_wrapper2 user_avatar_large" alt="worldofwarcraftlee"
                                                        title=""/></a></div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/80" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="80"><b>worldofwarcraftlee</b></a>
                                                    Tạo blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/80/activity_id:647" class="date"> 12 giờ, 46
                                                        phút Trước</a>
                                                    <a id='history_activity_647'
                                                       href='/histories/ajax_show/activity/647'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_647">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/115/both-challenge-should-admission-agreeable-attainable-for-them">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/uploads/blogs/thumbnail/115/150_square_5c7f1ec213e91e5ea4777b46f564de05.jpg"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/115/both-challenge-should-admission-agreeable-attainable-for-them">Both
                                                            challenge should admission agreeable attainable for them</a>
                                                    </div>

                                                    Both challenge should admission agreeable attainable for them that
                                                    will let them beforehand to about akin 20 or so. Players of either
                                                    hunt will allegedly ambition to WOW Classic Gold accompany...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="647"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="115" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_115"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/115' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_115">0</span></a> <a
                                                    href="javascript:void(0)" data-id="115" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_115"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/115/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_115">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:647" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_647"
                                            style="display:none">

                                            <li id="newComment_647">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?5660"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_647]"
                                                              class="commentBox showCommentBtn" data-id="647"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_647"></textarea>
                                                    <div id="commentForm_647-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_647">
                                                        <input type="hidden" id="comment_image_647"/>
                                                        <div id="comment_button_attach_647"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="115"
                                                           data-activity-id="647"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_647"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <div class="view-more">
                                    <a href="javascript:void(0)" class="viewMoreBtn"
                                       data-url="/activities/browse/everyone/page:2" data-div="list-content">Xem
                                        thêm</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="right" class="sl-rsp-modal col-md-3 pull-right" data-keyboard="false" data-backdrop="static">
            <div class="visible-xs visible-sm closeButton">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span> <span
                            class="sr-only">Close</span></button>
            </div>
            <div class="bar-content">
                <div class="box2 suggestion_block">
                    <h3>Top boomer</h3>
                    <div class="box_content">
                        <ul class="list6">
                            <li>
                                <a href="http://yaloo.me/users/view/15" prefix="100_square" data-item_id="15"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/15/100_square_7579f3cf6be0c6a90017fa0ce7ebd10e_tmp.jpg?4624"
                                            alt="Nguyễn Viết Hoan" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/15" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="15"><b>Nguyễn Viết Hoan</b></a>
                                    </div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_15' href='/friends/ajax_add/15' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Nguyễn Viết Hoan yêu cầu kết bạn'
                                           data-dismiss='' data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="http://yaloo.me/users/view/40" prefix="100_square" data-item_id="40"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/40/100_square_9f4c8155fa19e77cf90a40ac998d4e0e.jpg?4172"
                                            alt="Hoàng Hiệp" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/40" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="40"><b>Hoàng Hiệp</b></a>
                                    </div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_40' href='/friends/ajax_add/40' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Hoàng Hiệp yêu cầu kết bạn'
                                           data-dismiss='' data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="http://yaloo.me/users/view/11" prefix="100_square" data-item_id="11"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/11/100_square_01cb8b85d89b7a5ab6933f94d54367cd.jpg?9129"
                                            alt="Ngô Mạnh Cường" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/11" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="11"><b>Ngô Mạnh Cường</b></a>
                                    </div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_11' href='/friends/ajax_add/11' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Ngô Mạnh Cường yêu cầu kết bạn'
                                           data-dismiss='' data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="http://yaloo.me/users/view/65" prefix="100_square" data-item_id="65"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/65/100_square_5ef26119ed76038fd2935b8a6123cec6.jpg?4154"
                                            alt="Hiệp" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/65" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="65"><b>Hiệp</b></a>
                                    </div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_65' href='/friends/ajax_add/65' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Hiệp yêu cầu kết bạn' data-dismiss=''
                                           data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="http://yaloo.me/users/view/27" prefix="100_square" data-item_id="27"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/27/100_square_f08b7a4a3c097fec30a0eb6c8fa5cf76.jpg?3186"
                                            alt="Chả có nhẽ" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/27" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="27"><b>Chả có nhẽ</b></a>
                                    </div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_27' href='/friends/ajax_add/27' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Chả có nhẽ yêu cầu kết bạn'
                                           data-dismiss='' data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="visible-xs visible-sm">
            <div class="mobile-footer">
                <a class="pull-left" href="#" data-target="#leftnav"><i
                            class="material-icons">format_indent_increase</i></a>
                <a href="#" data-target="#right" class="pull-right"><i class="material-icons">format_indent_decrease</i></a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <section class="modal fade" id="whonearmeModal" role="basic" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </section>
    <section class="modal fade" id="themeModal" role="basic" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </section>
    <section class="modal fade" id="langModal" role="basic" tabindex='-1' aria-labelledby="myModalLabel"
             aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </section>
    <section class="modal fade modal-fullscreen force-fullscreen" tabindex='-1' id="photoModal" role="basic"
             aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content"></div>
        </div>
    </section>
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <!-- Config -->
                    <button type="button" class="btn blue ok">Đồng ý</button>
                    <button type="button" class="btn default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="plan-view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="bar-content">
            <ul class="menu_2 nav navbar-nav menu_top_list horizontal" id="">
                <li class=""><a href="/pages/about-us" no_replace_ssl="1" title="" class="" target=""><i
                                class="material-icons"></i>About Us</a></li>
                <li class=""><a href="/pages/terms-of-service" no_replace_ssl="1" title="" class="" target=""><i
                                class="material-icons"></i>Terms of Service</a></li>
                <li class=""><a href="/pages/privacy-policy" no_replace_ssl="1" title="" class="" target=""><i
                                class="material-icons"></i>Privacy Policy</a></li>
                <li class=""><a href="/home/contact" no_replace_ssl="1" title="" class="" target=""><i
                                class="material-icons"></i>Contact Us</a></li>
            </ul>
        </div>
        <br/>
        <span class="date">Phát triển bởi
            <a href="http://yaloo.me" target="_blank">yaloo 1.0</a>
            </span>
        &nbsp;.&nbsp; <a href="/home/ajax_lang"
                         data-target="#langModal" data-toggle="modal"
                         title="Ngôn ngữ">
            Việt Nam </a>
    </div>
    <div id="shareFeedModal" data-backdrop="static" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Chia sẻ</h4>
                </div>
                <div class="modal-body">
                    <script>
                        function ResizeIframe(id) {
                            var frame = document.getElementById(id);
                            frame.height = frame.contentWindow.document.body.scrollHeight + "px";
                        }

                    </script>
                    <iframe id="iframeShare" onload="ResizeIframe('iframeShare')" src="" width="99.6%" height=""
                            frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>