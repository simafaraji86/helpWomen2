/*quick add post ajax*/
/*$(document).ready(function(){

var createBtn=$('#create-quick-post');
var title=$('input[name=title]');
var content=$('input[name=conten]');
if(createBtn) {
    createBtn.click( function () {
        var postData={
            'title':title.value,
            'content':content.value,
            'status':'publish'
        }
        var createRequest= new XMLHttpRequest();
        createRequest.open('POST','/wp-json/wp/v2/posts');
        createRequest.setRequestHeader('X-WP-Nonce', magicData.nonce);
        createRequest.setRequestHeader('Content-Type','applicatin/json;charset=UTF-8');
        createRequest.send(JSON.stringify(postData));

    })
}
})