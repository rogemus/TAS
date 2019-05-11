{include file='module/header.tpl'}
<div id="layout">
    {include file='module/sidebar.tpl'}
    {include file='module/top-menu.tpl'}
    {nocache}
    <div id="main">
        <div class="wrapper">
            <div class="header"></div>
            <div class="add-edit-post">
                <div class="post-box post-l-wide">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <form action="addStatusController.php" method="post" enctype="multipart/form-data" id="addStatus">
                                    <div class="post-main post-edit-content">
                                        <textarea name="content" id="content" class="pure-input-1" placeholder="Content"></textarea>
                                        <div class="post-footer">
                                            <div class="post-attachment">
                                                <div class="pure-g">
                                                    <div class="pure-u-5-5 attachment-img"><span>Add img to post ( jpg | png | gif )</span>
                                                        <input type="file" name="avatar" id="avatar" class="pure-input-1">
                                                        <hr>
                                                        <button onclick="reset($('#avatar'))" class="pure-button pure-input-1 button-error button-small">Reset file</button>
                                                    </div>
                                                    
                                                    <div class="pure-u-5-5 attachment-file"><span>Add attachment to post ( pdf | doc | txt )</span>
                                                        <input type="file" name="file" id="file" class="pure-input-1">
                                                        <hr>
                                                        <button onclick="reset($('#file'))" class="pure-button pure-input-1  button-error button-small">Reset file</button>
                                                    </div>
                                                    
                                                    <div class="pure-u-5-5 post-submit">
                                                        <input type="submit" value="Submit" class="pure-button pure-input-1 pure-button-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

    <script>

        window.reset = function (e) {
            e.wrap('<form>').closest('form').get(0).reset();
            e.unwrap();
        }


      $(document).ready( function () {
        $.validator.addMethod('filesize', function(value, element, param) {
            return this.optional(element) || (element.files[0].size <= param)
        }, 'File must less than 1MB'
      );
        $( "#addStatus" ).validate({
          rules: {
            content:{
              required:true
            },
            avatar: {
              required: false,
              extension: "png|jpe?g|gif",
              filesize: 1048576
            },
            file: {
              required: false,
              extension: "txt|pdf|doc",
              filesize: 1048576
            }
          },
          });
      });
    </script>
    
    {/nocache}
</div>
{include file='module/footer.tpl'}
