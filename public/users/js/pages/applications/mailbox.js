"use strict";$(document).ready(function(){window.showMailboxSearchResults=function(){var e=$(".mailbox-search-form .input-group"),t=e.find(".live-search-results");t.addClass("is-loading"),e.addClass("editing has-results"),setTimeout(function(){t.removeClass("is-loading")},700)},$(".input-close-btn").on("click",function(e){$(this).closest("form").find("input").val("").focus().trigger("input")}),$(".mailbox-search-form .input-group input").on("blur",function(e){$(this).parent().removeClass("has-results")}),$(".mailbox-search-form .input-group input").on("focus",function(e){var t=$(this).parent();0<$(this).val().length&&!t.hasClass("editing")&&showMailboxSearchResults()}),$(".mailbox-search-form .bind-to-edit-indicator").on("input",function(e){var t=$(this).parent();0==$(this).val().length?t.removeClass("editing").removeClass("has-results"):showMailboxSearchResults()})}),$(document).ready(function(){$(".star-toggle").on("click",function(e){$(this).toggleClass("active")})}),$(document).ready(function(){$("#tinymce-basic").tinymce({width:"100%",height:300,menubar:!1,plugins:["advlist autolink lists link image charmap print preview anchor","searchreplace visualblocks code fullscreen","insertdatetime media table paste code help wordcount"],toolbar:"undo redo | formatselect |  bold italic",content_css:["//fonts.googleapis.com/css?family=Lato:300,300i,400,400i","//www.tiny.cloud/css/codepen.min.css"]})}),$(document).ready(function(){var e=new Uppy.Core({debug:!0,autoProceed:!0});e.use(Uppy.FileInput,{target:".uppy-minimal .uppy-panel",pretty:!0,trigger:"#uppy-select-files",locale:{strings:{chooseFiles:"Attach Files"}}}),e.use(Uppy.Tus,{endpoint:"https://master.tus.io/files/"}),e.use(Uppy.ProgressBar,{target:".uppy-minimal .uppy-progressbar",hideAfterFinish:!1}),e.use(Uppy.StatusBar,{target:".uppy-minimal .uppy-progressbar",hideUploadButton:!0,hideAfterFinish:!1}),e.use(Uppy.Informer,{target:".uppy-minimal .uppy-informer-container"}),e.on("upload-success",function(e,t){var i=t.uploadURL,s=e.name;document.querySelector(".uppy-minimal .uppy-files-list ol").innerHTML+='<li><a href="'+i+'" target="_blank">'+s+"</a></li>"})});