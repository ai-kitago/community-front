<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package community
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<article id="post-<?php the_ID(); ?>">
				<header class="page-header"></header>
				<section class="front-section">
					<div class="wrapper">
						<header class="section-header">
							<h1 class="section-title">情報登録<span class="category-color">REGISTER</span></h1>
						</header>
						<div class="private-box">
							<form method="post">
								<div class="form-private">
									<div class="row">
										<div class="col-pc-6 col-sp-12 mb-pc-10">
											<label>姓</label>
											<input type="text" class="input-field">
										</div>
										<div class="col-pc-6 col-sp-12 mb-pc-10">
											<label>名</label>
											<input type="text" class="input-field">
										</div>
									</div>
									<div class="row">
										<div class="col-pc-12 col-sp-12 mb-pc-10">
											<label>メールアドレス</label>
											<input type="email" class="input-field">
										</div>
									</div>
									<div class="row">
										<div class="col-pc-12 col-sp-12 mb-pc-10">
											<label>パスワード</label>
											<input type="password" class="input-field">
										</div>
										<div class="col-pc-12 col-sp-12 mb-pc-10">
											<label>パスワード（確認用）</label>
											<input type="password" class="input-field">
										</div>
									</div>
									<div class="row">
										<div class="col-pc-6 col-sp-12 mb-pc-10">
											<label>お住いの都道府県</label>
											<select class="input-field pref-select">
												<?php foreach($dataClass->prefArray() as $key => $value) : ?>
                    								<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                    							<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-pc-6 mb-pc-20">
											<label>アバター</label>
											<div class="profile">
												<div id="crop-avatar">
													<div id="myAvatar" class="dropzone dz-clickable avatarzone"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-pc-12 mb-pc-10">
											<label>利用規約</label>
											<div class="term-box">
												<p>テキストテキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキストテキストテキストテキスト
テキスト
テキストテキストテキストテキストテキストテキストテキストテキスト
テキストテキストテキスト
テキストテキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
テキスト</p>
											</div>
											<div class="cntr checkbox align-center">
											    <label for="cbx-login">
												    <input id="cbx-login" class="checkbox-input" type="checkbox" value="login">
													<span class="checkbox-parts">利用規約に同意する</span>
												</label>
											</div>
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="col-pc-6 col-pc-offset-3 col-sp-12 mb-pc-20">
										<input class="button button-block" type="submit" value="登録">
									</div>
								</div>
								<script>
								<!--
									jQuery(function($){
    									if($('#myAvatar').length){
											var hogeParam = "hoge";
											// Dropzone設定
											Dropzone.autoDiscover = false;
											// Dropzoneフォームのidをキャメルケースで記述
											//Dropzone.options.myAwesomeDropzone = {};
											Dropzone.options.myAvatar = {
												url: "./",
												method: "post",
												withCredentials: false,
												parallelUploads: 1,
												uploadMultiple: false,
												maxFilesize: 1,
												paramName: "file",
												createImageThumbnails: true,
												maxThumbnailFilesize: 10,
												thumbnailWidth: 300,
												thumbnailHeight: 300,
												filesizeBase: 1000,
												maxFiles: 1,
												params: {},
												clickable: true,
												ignoreHiddenFiles: true,
												acceptedFiles: ".jpg,.jpeg,.png,.gif",
												acceptedMimeTypes: null,
												autoProcessQueue: true,
												autoQueue: true,
												addRemoveLinks: true,
												previewsContainer: null,
												hiddenInputContainer: "body",
												capture: null,
												renameFilename: null,
												dictDefaultMessage: "<span>【メイン画像】</span><br>このエリアにドロップしてください",
												dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",
												dictFallbackText: "Please use the fallback form below to upload your files like in the olden days.",
												dictFileTooBig: "ファイルが大き過ぎます ({{filesize}}MB). 最大: {{maxFilesize}}MB.",
												dictInvalidFileType: "このタイプのファイルはアップロードできません。",
												dictResponseError: "Server responded with {{statusCode}} code.",
												dictCancelUpload: "Cancel upload",
												dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
												dictRemoveFile: "",
												dictRemoveFileConfirmation: null,
												dictMaxFilesExceeded: "You can not upload any more files."
											};
											var myDropzone = new Dropzone("div#myAvatar",{url:"./"});
											myDropzone.on("sending", function(file,xhr,formData) {
												formData.append("hoge", hogeParam);
											});
										}
									});
								-->
								</script>
							</form>
						</div>
					</div>
				</section>
			</article>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php include(get_template_directory().'/template-parts/content-add.php'); ?>

<?php
//get_sidebar();
get_footer();
