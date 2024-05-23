<?php
include("class/productClass.php");

$product = new product;
$product_id = $_GET['product_id'];
$get_product = $product->get_product($product_id);

if ($get_product) {
    $resultProd = $get_product->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = $_POST['category_id'];
    $categorySub_id = $_POST['categorySub_id'];

    $classify_id = $_POST['classify_id'];
    $product_name = $_POST['product_name'];
    $price_old = $_POST['price_old'];
    $price_sale = $_POST['price_sale'];
    $product_desc = $_POST['product_desc'];
    $product_img = $_FILES['product_img']['name'];
    $filename = $_FILES['product_imgList']['name'];
    $filetmp = $_FILES['product_imgList']['tmp_name'];
    $update_product = $product->update_product($classify_id, $product_name, $price_old, $price_sale, $product_desc, $product_img, $filename, $filetmp, $product_id);
    header("Location: productShow.php");
    exit();
}
include("view/header.php");
include("view/sidebar.php");
?>
<title>Chỉnh sửa sản phẩm</title>
<!-- main content -->
<style>
    .main-content {
        height: 100%;
    }

    form {
        padding-bottom: 30px;
    }

    label {
        margin-left: 5px;
    }

    select,
    input,
    textarea {
        outline: none;
        height: 30px;
        width: 180px;
        border: 1px solid #333;
        border-radius: 5px;
        padding-left: 10px;
        margin-bottom: 20px;
    }

    select {
        margin-right: 15px;
    }

    textarea {
        padding-top: 10px;
        margin-bottom: 10px;
        width: 400px;
        height: 150px;
    }

    .file input {
        border: none;
        cursor: pointer;
    }

    button {
        width: 60px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid #333;
        box-sizing: unset;
        cursor: pointer;
    }

    button:hover {
        background-color: gray;
    }

    label,
    .label {
        display: flex;
        /* width: 100px; */
    }

    label span {
        color: red;
    }

    h3 {
        margin: 2px 0 2px 4px;
    }

    .image input {
        border: none;
        padding-left: 5px;
    }

    #container {
        width: 1000px;
        margin: 20px auto;
    }

    .ck-editor {
        max-width: 95%;
    }

    .ck-content {
        min-height: 250px;
        margin-bottom: 20px;
    }

    .ck-content .image {
        max-width: 80%;
        margin: 20px auto;
    }

    .ck-powered-by {
        display: none;
    }
</style>

<div class="main-content">
    <h2>Sửa sản phẩm</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="product-name">
            <label>Tên sản phẩm</label>
            <input required type="text" name="product_name" value="<?php echo $resultProd['product_name'] ?>">
        </div>
        <div class="category">
            <label>Danh mục sản phẩm</label>
            <select name="category_id" id="category_id">
                <option value="#">--- Chọn danh mục ---</option>
                <?php
                $show_category = $product->show_category();
                if ($show_category) {
                    while ($resultCate = $show_category->fetch_assoc()) {
                ?>
                        <option <?php if ($resultProd['category_id'] == $resultCate['category_id']) {
                                    echo 'selected';
                                } ?> value="<?php echo $resultCate['category_id'] ?>">
                            <?php echo $resultCate['category_name'] ?>
                        </option>
                <?php
                    }
                }
                ?>
            </select>
            <select name="categorySub_id" id="categorySub_id">
                <option value="">--- Danh mục con ---</option>
                <?php
                $show_categorySub = $product->show_categorySub();
                if ($show_categorySub) {
                    while ($resultSub = $show_categorySub->fetch_assoc()) {
                ?>
                        <option <?php if ($resultProd['categorySub_id'] == $resultSub['categorySub_id']) {
                                    echo 'selected';
                                } ?> value="<?php echo $resultSub['categorySub_id'] ?>">
                            <?php echo $resultSub['categorySub_name'] ?>
                        </option>
                <?php
                    }
                }
                ?>
            </select><br>
        </div>
        <div class="classify">
            <label for="">Loại sản phẩm <span style="margin-right: 55px">*</span></label>
            <select name="classify_id" id="classify_id" required>
                <option value="">--- Loại sản phẩm ---</option>
            </select>
        </div>
        <div class="price">
            <label for="">Giá sản phẩm <span>*</span></label>
            <input required type="text" name="price_old" placeholder="Giá sản phẩm" value="<?php echo $resultProd['price_old'] ?>">
            <input type="text" name="price_sale" placeholder="Giá khuyến mại" value="<?php echo $resultProd['price_sale'] ?>">
        </div>
        <div class="describe">
            <label for="">Mô tả sản phẩm <span>*</span></label>
            <textarea name="product_desc" id="editor" placeholder="Mô tả sản phẩm"><?php echo $resultProd['product_desc'] ?></textarea>
        </div>
        <h3>Ảnh sản phẩm</h3>
        <div class="image">
            <div class="label">
                <label for="">Ảnh đại diện sản phẩm <span style="margin-right: 25px">*</span></label>
                <label for="" style="margin-left: 10px;">Ảnh mô tả <span style="color: red">*</span></label>
            </div>
            <img src="uploads/<?php echo $resultProd['product_img'] ?>" alt="Product Image" style="margin-right: 10px; width: 50px; height: auto;"><br>
            <input type="file" name="product_img">
            <input type="file" name="product_imgList[]" multiple>
        </div>
        <button>Thêm</button>
    </form>
</div>
<script>
    // This sample still does not showcase all CKEditor&nbsp;5 features (!)
    // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
    CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
        toolbar: {
            items: [
                'exportPDF', 'exportWord', '|',
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                '-',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'alignment', '|',
                'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                'textPartLanguage', '|',
                'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },
        // Changing the language of the interface requires loading the language file using the <script> tag.
        // language: 'es',
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
        heading: {
            options: [{
                    model: 'paragraph',
                    title: 'Paragraph',
                    class: 'ck-heading_paragraph'
                },
                {
                    model: 'heading1',
                    view: 'h1',
                    title: 'Heading 1',
                    class: 'ck-heading_heading1'
                },
                {
                    model: 'heading2',
                    view: 'h2',
                    title: 'Heading 2',
                    class: 'ck-heading_heading2'
                },
                {
                    model: 'heading3',
                    view: 'h3',
                    title: 'Heading 3',
                    class: 'ck-heading_heading3'
                },
                {
                    model: 'heading4',
                    view: 'h4',
                    title: 'Heading 4',
                    class: 'ck-heading_heading4'
                },
                {
                    model: 'heading5',
                    view: 'h5',
                    title: 'Heading 5',
                    class: 'ck-heading_heading5'
                },
                {
                    model: 'heading6',
                    view: 'h6',
                    title: 'Heading 6',
                    class: 'ck-heading_heading6'
                }
            ]
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
        placeholder: 'Nhập mô tả sản phẩm',
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
        fontSize: {
            options: [10, 12, 14, 'default', 18, 20, 22],
            supportAllValues: true
        },
        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
        htmlSupport: {
            allow: [{
                name: /.*/,
                attributes: true,
                classes: true,
                styles: true
            }]
        },
        // Be careful with enabling previews
        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
        htmlEmbed: {
            showPreviews: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
        mention: {
            feeds: [{
                marker: '@',
                feed: [
                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                    '@sugar', '@sweet', '@topping', '@wafer'
                ],
                minimumCharacters: 1
            }]
        },
        // The "superbuild" contains more premium features that require additional configuration, disable them below.
        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
        removePlugins: [
            // These two are commercial, but you can try them out without registering to a trial.
            // 'ExportPdf',
            // 'ExportWord',
            'AIAssistant',
            'CKBox',
            'CKFinder',
            'EasyImage',
            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
            // Storing images as Base64 is usually a very bad idea.
            // Replace it on production website with other solutions:
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
            // 'Base64UploadAdapter',
            'MultiLevelList',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
            // from a local file system (file://) - load this site via HTTP server if you enable MathType.
            'MathType',
            // The following features are part of the Productivity Pack and require additional license.
            'SlashCommand',
            'Template',
            'DocumentOutline',
            'FormatPainter',
            'TableOfContents',
            'PasteFromOfficeEnhanced',
            'CaseChange'
        ]
    });
</script>

<script>
    $(document).ready(function() {
        $("#category_id").change(function() {
            var cate= $(this).val();
            $.get("productAddAjax.php", {
                category_id: cate
            }, function(data) {
                $("#categorySub_id").html(data);
            });
        });

        $("#categorySub_id").change(function() {
            var cateSub = $(this).val();
            $.get("productAddAjax.php", {
                categorySub_id: cateSub
            }, function(data) {
                $("#classify_id").html(data);
            });
        });
    });
</script>