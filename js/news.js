// API key: ccd7ee5214ee4f8bbdc0e8be3f0ae011 for outlook acct
/* 
    Let country be a variable string in the url till 5 articles are fetched
    Store these articles in to an array 
    Use global variable to navigate foward and backward through these contents in the array
    countries: in, us, gb, 
*/
let country = 'in';
var url = 'https://newsapi.org/v2/top-headlines?' +
            'country='+country+'&'+ 'category=science&'+ 'q=space&'+
            'sortBy=popularity&' +
            'apiKey=ccd7ee5214ee4f8bbdc0e8be3f0ae011';

const httpRequest = new XMLHttpRequest();
httpRequest.open("GET", url, false);
httpRequest.send();

const newsString = httpRequest.responseText;
const tonewsObj = JSON.parse(newsString);

for (let i = 0 ; i < 5 ; i++) {
    var news_src = '#news-src-'+ i.toString(); 
    var news_thumbnail = '#news-thumbnail-'+ i.toString();
    var news_link = '#news-link-'+ i.toString();
    
    document.querySelector(news_src).innerHTML = tonewsObj.articles[i].source.name;
    document.querySelector(news_thumbnail).src = tonewsObj.articles[i].urlToImage;
    document.querySelector(news_link).href = tonewsObj.articles[i].url;
    document.querySelector(news_link).innerHTML = tonewsObj.articles[i].title;
}
