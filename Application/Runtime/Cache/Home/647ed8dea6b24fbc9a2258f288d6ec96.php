<?php if (!defined('THINK_PATH')) exit();?>
<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>弹出层</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <link rel="Stylesheet" type="text/css" href="/Public/css/wCheck.css" />
	<script type="text/javascript" src="/Public/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/js/wCheck.min.js"></script>
	<script type="text/javascript" src="/Public/js/zhujuan.js"></script>
</head>
<body>
	<div class="warp">
	<form action="" method="post"  onSubmit="return check(this)">
		<div class="page_header">
			<p class="page_text">卷头</p>
				<div class="clear mar_L">
						<div class="xialai_xz" id="xialai1">
							<input type="text" name='header_y' value="2013年" class="wh"  readonly= "true" onfocus=this.blur()>
							<img src="/Public/images/select_arrow.png" alt="">
							<div class="xia_list">
								<a href="javascript:void(0)">2013年</a>
								<a href="javascript:void(0)">2014年</a>
								<a href="javascript:void(0)">2015年</a>
							</div>
						</div>


						<div class="xialai_xz" id="xialai2">
							<input type="text" name="header_q" value="北京市" class="wh"  readonly= "true" onfocus=this.blur()>
							<img src="/Public/images/select_arrow.png" alt="">
							<div class="xia_list">
								<a href="javascript:void(0)">北京市</a>
								<a href="javascript:void(0)">天津市</a>
								<a href="javascript:void(0)">江苏省</a>
							</div>
						</div>


						<div class="xialai_xz" id="xialai3">
							<input type="text" name="header_f" value="春季普通高中会考" class="wh" style="width:188px"  readonly= "true" onfocus=this.blur()>
							<img src="/Public/images/select_arrow.png" alt="">
							<div class="xia_list">
								<a href="javascript:void(0)">春季普通高中会考</a>
								<a href="javascript:void(0)">秋季普通高中会考</a>
							</div>
						</div>
						<div class="xialai_xz" id="xialai4">
							<input type="text" name="subject" value="化学试卷" class="wh"  readonly= "true" onfocus=this.blur()>
							<img src="/Public/images/select_arrow.png" alt="">
							<div class="xia_list">
								<a href="javascript:void(0)">化学试卷</a>
								<a href="javascript:void(0)">数学试卷</a>
								<a href="javascript:void(0)">物理试卷</a>
							</div>
						</div>
				</div>
		</div>
		<div class="page_style">
			<p class="page_text">试卷版式</p>
			<div class="style_select clear" id="style_select_one">
				<input type="hidden" name="set_type" value="A4" id="page_value_one">
				<a href="javascript:void(0)" class="active">A4</a>
			</div>
		</div>

		<div class="page_typeof">
			<p class="page_text">试卷类型</p>
			<div class="cheack_box">
				<input type="hidden" value="" class="car_type">
				<input  type="radio" name="car_type" value="0"  id="radio-test2_1" checked="checked" /><label for="radio-test2_1" class="color_check">学生用卷（无答案）</label>
			    <input  type="radio" name="car_type" value="1" id="radio-test2_2"/><label for="radio-test2_2">教师用卷（答案集中在卷尾）</label>
			</div>
		</div>
		<div class="page_style">
			<p class="page_text">答题卡片式</p>
			<div class="style_select clear" id="style_select_two">
				<input type="hidden" name="card_type" value="A3" id="page_value_two">
				<a href="javascript:void(0)"class="active">A4</a>
			</div>
		</div>

	<p class="pop_btn clear">
		<input type="submit" value="开始选题">
		<input type="reset" value="取消">
	</p>
</form>
	</div>
</body>
</html>