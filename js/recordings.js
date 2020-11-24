$(document).ready(function () {
    const API_KEY = "AIzaSyD1DAqaE2BipNeftNH18XS6RchSeoiCbUU";
    const maxResult = 9;
    const URL = "https://youtube.googleapis.com/youtube/v3/playlistItems?";
    const playList1 = "PLw9gTj1tyYCoDzGpqVieGoH0ydyu5kvwJ";
    const playList2 = "PLw9gTj1tyYCqqun9aM_GmDDOooGU13CB0";
    const playList3 = "PLw9gTj1tyYCriBpSwOBXb94vaZviATw8J";

    $.getJSON(
        `https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&order=date&maxResults=${maxResult}&playlistId=${playList1}&key=${API_KEY}`,
        function (data) {
            data.items.forEach(item => {
                const date = new Date(item.snippet.publishedAt).toDateString();;
                
                $(".recordings").append(
                    `
                    <li class="card">
                        <div class="content-box">
                            <div class="iframe">
                                <iframe src="https://www.youtube.com/embed/${item.snippet.resourceId.videoId}" width="268" height="170" frameborder="0"></iframe>
                            </div>
                            <div class="detail px-2 pt-2">
                                <p class="time ftsz-13 mx-0"><span class="calander">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.9" height="17.5" viewBox="0 0 15.9 17.5">
                                    <defs>
                                    <style>
                                        .a-cal{fill:none;stroke:#394044;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}
                                    </style>
                                    </defs>
                                    <g transform="translate(-2.25 -1.25)">
                                    <rect class="a-cal" width="14.4" height="14.4" rx="2" transform="translate(3 3.6)" />
                                    <line class="a-cal" y2="3.2" transform="translate(13.4 2)" />
                                    <line class="a-cal" y2="3.2" transform="translate(7 2)" />
                                    <line class="a-cal" x2="14.4" transform="translate(3 8.4)" />
                                    </g>
                                    </svg>
                                    </span>${date}<span class="duration ftsz-13"></span></p>
                            </div>
                            <p class="title px-2 mt-4 mont-font semibold-emphasis ftsz-14">${item.snippet.title}</p>
                        </div>
                    </li>
                    `
                );
            });
                
        });
    
    $.getJSON(
        `https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&order=date&maxResults=${maxResult}&playlistId=${playList2}&key=${API_KEY}`,
        function (data) {
            data.items.forEach(item => {
                const date = new Date(item.snippet.publishedAt).toDateString();;
                
                $(".recordings-2").append(
                    `
                    <li class="card">
                        <div class="content-box">
                            <div class="iframe">
                                <iframe src="https://www.youtube.com/embed/${item.snippet.resourceId.videoId}" width="268" height="170" frameborder="0"></iframe>
                            </div>
                            <div class="detail px-2 pt-2">
                                <p class="time ftsz-13 mx-0"><span class="calander">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.9" height="17.5" viewBox="0 0 15.9 17.5">
                                    <defs>
                                    <style>
                                        .a-cal{fill:none;stroke:#394044;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}
                                    </style>
                                    </defs>
                                    <g transform="translate(-2.25 -1.25)">
                                    <rect class="a-cal" width="14.4" height="14.4" rx="2" transform="translate(3 3.6)" />
                                    <line class="a-cal" y2="3.2" transform="translate(13.4 2)" />
                                    <line class="a-cal" y2="3.2" transform="translate(7 2)" />
                                    <line class="a-cal" x2="14.4" transform="translate(3 8.4)" />
                                    </g>
                                    </svg>
                                    </span>${date}<span class="duration ftsz-13"></span></p>
                            </div>
                            <p class="title px-2 mt-4 mont-font semibold-emphasis ftsz-16">${item.snippet.title}</p>
                        </div>
                    </li>
                    `
                );
            });
                
        });
    
    $.getJSON(
        `https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&order=date&maxResults=${maxResult}&playlistId=${playList3}&key=${API_KEY}`,
        function (data) {
            data.items.forEach(item => {
                const date = new Date(item.snippet.publishedAt).toDateString();;
                
                $(".recordings-3").append(
                    `
                    <li class="card">
                        <div class="content-box">
                            <div class="iframe">
                                <iframe src="https://www.youtube.com/embed/${item.snippet.resourceId.videoId}" width="268" height="170" frameborder="0"></iframe>
                            </div>
                            <div class="detail px-2 pt-2">
                                <p class="time ftsz-13 mx-0"><span class="calander">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.9" height="17.5" viewBox="0 0 15.9 17.5">
                                    <defs>
                                    <style>
                                        .a-cal{fill:none;stroke:#394044;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}
                                    </style>
                                    </defs>
                                    <g transform="translate(-2.25 -1.25)">
                                    <rect class="a-cal" width="14.4" height="14.4" rx="2" transform="translate(3 3.6)" />
                                    <line class="a-cal" y2="3.2" transform="translate(13.4 2)" />
                                    <line class="a-cal" y2="3.2" transform="translate(7 2)" />
                                    <line class="a-cal" x2="14.4" transform="translate(3 8.4)" />
                                    </g>
                                    </svg>
                                    </span>${date}<span class="duration ftsz-13"></span></p>
                            </div>
                            <p class="title px-2 mt-4 mont-font semibold-emphasis ftsz-16">${item.snippet.title}</p>
                        </div>
                    </li>
                    `
                );
            });
                
        });
});
