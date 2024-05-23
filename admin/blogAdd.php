<?php
include("view/header.php");
include("view/sidebar.php");
include("class/blogClass.php");

$blog = new blog();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryBlog_id = $_POST['categoryBlog_id'];
    $blog_name = $_POST['blog_name'];
    $blog_img = $_FILES['blog_img']['name'];
    $blog_content = $_POST['blog_content'];
    move_uploaded_file($_FILES['blog_img']['tmp_name'], "uploads/" . $_FILES['blog_img']['name']);

    $insert_blog = $blog->insert_blog($categoryBlog_id, $blog_name, $blog_img, $blog_content);
}
?>
<title>Thêm bài viết</title>
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
    <h2>Thêm bài viết</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="blog-name">
            <label for="">Tên bài viết <span>*</span></label>
            <input required type="text" name="blog_name" placeholder="Nhập tên tên bài viết">
        </div>
        <div class="blog-category">
            <label for="">Danh mục bài viết <span style="margin-right: 55px">*</span></label>
            <select name="categoryBlog_id" id="categoryBlog_id">
                <option value="">--- Danh mục bài viết ---</option>
                <?php
                $show_categoryBlog = $blog->show_categoryBlog();
                if ($show_categoryBlog) {
                    while ($result = $show_categoryBlog->fetch_assoc()) {
                ?>
                        <option value="<?php echo $result['categorySub_id'] ?>">
                            <?php echo $result['categorySub_name'] ?>
                        </option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <div class="describe">
            <label for="">Viết bài blog <span>*</span></label>
            <textarea name="blog_content" id="editor" placeholder="Viết bài blog..."></textarea>
        </div>
        <h3>Ảnh đại diện bài viết</h3>
        <div class="image">
            <div class="label">
                <label for="">Ảnh đại diện sản phẩm</label>
            </div>
            <input type="file" name="blog_img">
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