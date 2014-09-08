var postArea;
var posts = [
    
    {
       'date' : '20001120',
       'title' : 'sadad',
       'content' : ' sdfasfdafasdf',
       'image' : ' '
    },
    
    {
       'date' : '',
       'title' : 'dfasfafa',
       'content' : ' ',
       'image' : ' '
       
    },
    
    {
       'date' : '',
       'title' : 'wewerwer',
       'content' : ' ',
       'image' : ' '
    },
    
    {
       'date' : '',
       'title' : 'ertwetwert',
       'content' : ' ',
       'image' : ' '
    }
];

var myhtml = '';

posts.forEach(function(post, index){
    
    var blogdate = moment(post.date, "YYYYMMDD").fromNow();
    myhtml += '<div class="container">';
    myhtml += '<h2>' + post.title + '</h2>';
    myhtml += '<div class="container">';
    myhtml += '<img src="' + post.image + '">';
    myhtml += '</div>';
    myhtml += '<div class="container">';
    myhtml += '<p>' + post.content + '</p>';
    myhtml += '</div>';
    myhtml += '<p>' + blogdate + '</p>';
    myhtml += '</div>';
    
});

    var postArea = document.getElementById('blogPosts');
    postArea.innerHTML = myhtml;


