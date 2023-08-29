<body>
    <div class="body-container">

     <div class="dashboard">
      <div class="grid-container">
         <div class="profile grid-area">
           <div class="img">
   <!--           <i class="fas fa-ellipsis-v"></i> -->
             <img src="https://images.unsplash.com/photo-1502292754603-a0891e807332?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80">
             <h3>{{ Auth::user()->name }}</h3>
             <h5 class="online">{{ Auth::user()->email }}</h5>
             <div class="button"><i class="fas fa-sliders-h"></i></div>
            </div>
           <div class="profile-data">
               <div class="data-details">
                 <h5>Age</h5>
                 <h4>24</h4>
               </div>
               <div class="data-details">
                 <h5>Location</h5>
                 <h4>Paris</h4>
               </div>
               <div class="data-details">
                 <h5>Score</h5>
                 <h4>150</h4>
               </div>
             </div>
           <div class="profile-more">
             <h5>Show more</h5>
           </div>
        </div>


     

        <div class="edit-profile grid-area">
           <div class="header">
             <h1>Edit your profile</h1>
           </div>
          <div class="profile-picture">
            <img src="https://images.unsplash.com/photo-1502292754603-a0891e807332?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80">
          </div>
          <h1>Chloe C</h1>
          <div class="edit-infos">
            <h3>Personal information<i class="fas fa-pen"></i></h3>
            <div class="profile-data">
               <div class="data-details">
                 <h5>Age</h5>
                 <h4>24</h4>
               </div>
              <div class="data-details">
                 <h5>Gender</h5>
                 <h4>Woman</h4>
               </div>
               <div class="data-details">
                 <h5>Location</h5>
                 <h4>Paris</h4>
               </div>
            </div>
          </div>
          <div class="edit-interest">
            <h3>What are you looking for ?<i class="fas fa-pen"></i></h3>
            <p class="p-small">Men and Women</p>
          </div>
          <div class="edit-interest">
            <h3>Bio<i class="fas fa-pen"></i></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam leo eu sapien tristique, eu efficitur mi ornare. Aliquam erat volutpat. Pellentesque rhoncus volutpat laoreet.Aliquam erat volutpat. Pellentesque rhoncus volutpat laoreet.Aliquam erat volutpat. Pellentesque rhoncus volutpat laoreet.</p>
          </div>
          <div class="edit-interest">
            <h3>Your interests <i class="fas fa-pen"></i></h3>
            <p>#traveling #cooking #summer #jazz #friends #art #walk #dogs #design #architecture #photo #nature #fun </p>
          </div>
          <div class="edit-picture">
            <div class="picture">
              <img src="https://images.unsplash.com/photo-1540218660726-95c6764dd7ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
            </div>
             <div class="picture">
               <img src="https://images.unsplash.com/photo-1467020421390-2fb2647a413e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1235&q=80">
            </div>
             <div class="picture">
               <img src="https://images.unsplash.com/photo-1488751045188-3c55bbf9a3fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
            </div>
            <div class="picture-add">
              <i class="fas fa-plus"></i>
            </div>
          </div>
        </div>


         <div class="matchs grid-area">
           <div class="header">
             <h1>Your Matchs</h1>
           </div>
           <div class="display-matchs">
             <div class="one-match">
               <div class="one-match-content">
                <img src="https://images.unsplash.com/photo-1517935541300-19815e88fa63?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                 <div class="match-info">
                  <h4>John, 30</h4>
                   <h5>Last seen 2d ago</h5>
                 </div>
               </div>
             </div>
              <div class="one-match">
                <div class="one-match-content">
                <img src="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                 <div class="match-info">
                  <h4>Alicia, 23</h4>
                   <h5 class="online">Online</h5>
                 </div>
                </div>
             </div>
              <div class="one-match">
                <div class="one-match-content">
                <img src="https://images.unsplash.com/photo-1495078065017-564723e7e3e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1300&q=80">
                 <div class="match-info">
                  <h4>Dan, 49</h4>
                   <h5 >Last seen 15h ago</h5>
                 </div>
                </div>
             </div>
              <div class="one-match">
                <div class="one-match-content">
                  <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                   <div class="match-info">
                    <h4>Christopher, 27</h4>
                     <h5 >Last seen 1w ago</h5>
                   </div>
                </div>
             </div>
              <div class="one-match">
                <div class="one-match-content">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                 <div class="match-info">
                  <h4>Lea, 25</h4>
                   <h5 class="online">Online</h5>
                 </div>
                </div>
             </div>
            <div class="one-match">
              <div class="one-match-content">
                <img src="https://images.unsplash.com/photo-1517935541300-19815e88fa63?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                 <div class="match-info">
                  <h4>John, 30</h4>
                   <h5>Last seen 2d ago</h5>
                 </div>
              </div>
             </div>
              <div class="one-match">
                <div class="one-match-content">
                <img src="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                 <div class="match-info">
                  <h4>Alicia, 23</h4>
                   <h5 class="online">Online</h5>
                 </div>
                </div>
             </div>
              <div class="one-match">
                <div class="one-match-content">
                <img src="https://images.unsplash.com/photo-1495078065017-564723e7e3e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1300&q=80">
                 <div class="match-info">
                  <h4>Dan, 49</h4>
                   <h5 >Last seen 15h ago</h5>
                 </div>
                </div>
             </div>
              <div class="one-match">
                <div class="one-match-content">
                  <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                   <div class="match-info">
                    <h4>Christopher, 27</h4>
                     <h5 >Last seen 1w ago</h5>
                   </div>
                </div>
             </div>
              <div class="one-match">
                <div class="one-match-content">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                 <div class="match-info">
                  <h4>Lea, 25</h4>
                   <h5 class="online">Online</h5>
                 </div>
                </div>
             </div>
           </div>
        </div>
      </div>
     </div>
    </div>

   </body>

   <style>
    body {
	 background-color: #fafafa;
	 overflow-x: hidden;
	 padding-top: 50px;
	 font-family: 'Roboto', sans-serif;
	 color: #615f5e;
}
 * {
	 box-sizing: border-box;
}
 .body-container {
	 width: 1000px;
	 margin: auto;
	 min-height: 200px;
}
 .dashboard {
	 width: 100%;
}
 .dashboard h2 {
	 color: #363b6d;
	 font-size: 18px;
	 letter-spacing: 0.5px;
}
 .dashboard h5 {
	 position: absolute;
	 bottom: 0;
	 right: 20px;
	 z-index: 1;
	 color: #363b6d;
	 opacity: 0.5;
	 font-size: 15px;
	 margin-bottom: 0 !important;
}
 .dashboard h5.online {
	 color: #72c17c;
	 opacity: 1;
}
 .dashboard .dashboard-container {
	 height: 620px;
	 width: 400px;
	 background-color: white;
	 -webkit-box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 0.1);
	 -moz-box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 0.1);
	 box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 0.1);
	 margin-bottom: 20px;
}
 .dashboard .dashboard-container.last-profile {
	 width: 580px;
	 height: 300px;
}
 .dashboard .grid-container {
	 display: grid;
	 grid-template-columns: 1.3fr 1fr 1.2fr;
	 grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
	 grid-template-areas: "profile last-view last-view" "profile last-like last-like" "edit-profile edit-profile matchs" "edit-profile edit-profile matchs" "edit-profile edit-profile matchs";
	 grid-gap: 0 20px;
}
 .dashboard .grid-container .grid-area {
	 background-color: white;
	 -webkit-box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 0.1);
	 -moz-box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 0.1);
	 box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 0.1);
	 margin-bottom: 20px;
	 border-radius: 0.25rem;
	 overflow: hidden;
}
 .dashboard .grid-container .profile {
	 grid-area: profile;
}
 .dashboard .grid-container .profile .img {
	 position: relative;
	 overflow: hidden;
	 height: 420px;
}
 .dashboard .grid-container .profile .img i {
	 position: absolute;
	 top: 20px;
	 right: 20px;
	 color: white;
	 font-size: 25px;
	 cursor: pointer;
}
 .dashboard .grid-container .profile .img h3 {
	 position: absolute;
	 bottom: 10px;
	 right: 20px;
	 color: #e83114;
	 z-index: 1;
	 font-weight: normal;
	 letter-spacing: 0.5px;
	 cursor: default;
}
 .dashboard .grid-container .profile .img .button {
	 position: absolute;
	 bottom: 0;
	 left: 10px;
	 z-index: 1;
	 height: 60px;
	 width: 60px;
	 border-radius: 50%;
	 background-color: #363b6d;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 padding-top: 1px;
	 cursor: pointer;
	 transition: all 0.4s;
}
 .dashboard .grid-container .profile .img .button:hover {
	 bottom: 5px;
	 box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 1);
}
 .dashboard .grid-container .profile .img .button i {
	 right: initial;
	 top: initial;
	 font-size: 25px;
	 position: initial;
}
 .dashboard .grid-container .profile .img img {
	 width: 100%;
	 height: 420px;
	 object-fit: cover;
}
 .dashboard .grid-container .profile .img:after {
	 background-color: white;
	 width: 550px;
	 transform: rotate(-8deg) skewX(0deg);
	 opacity: 1;
	 content: "";
	 position: absolute;
	 top: 360px;
	 left: -110px;
	 height: 250px;
	 border-radius: 400px 0px 239px 0px / 123px 0px 121px 0px;
	 transition: all 0.4s;
}
 .dashboard .grid-container .profile .img:before {
	 background-color: #e83114;
	 width: 450px;
	 transform: rotate(-14deg) skewX(0deg);
	 opacity: 0.6;
	 content: "";
	 position: absolute;
	 top: 325px;
	 height: 250px;
	 left: -55px;
	 border-radius: 400px 0px 239px 0px / 123px 0px 121px 0px;
	 transition: all 0.4s;
}
 .dashboard .grid-container .profile .profile-data {
	 width: 100%;
	 padding: 20px;
	 padding-bottom: 10px;
	 display: flex;
	 justify-content: flex-end;
}
 .dashboard .grid-container .profile .profile-data .data-details {
	 display: flex;
	 flex-direction: column;
	 align-items: center;
	 margin-left: 55px;
}
 .dashboard .grid-container .profile .profile-data .data-details h5 {
	 position: initial;
}
 .dashboard .grid-container .profile .profile-data .data-details h4 {
	 color: #363b6d;
	 font-weight: normal;
}
 .dashboard .grid-container .profile .profile-more {
	 display: flex;
	 padding: 0 20px;
	 justify-content: flex-end;
}
 .dashboard .grid-container .profile .profile-more h5 {
	 position: initial;
	 cursor: pointer;
	 text-decoration: underline;
}
 .dashboard .grid-container .profile .profile-more h5:hover {
	 color: #e83114;
	 opacity: 1;
}
 .dashboard .grid-container .last-view {
	 grid-area: last-view;
}
 .dashboard .grid-container .last-like {
	 grid-area: last-like;
}
 .dashboard .grid-container .edit-profile {
	 grid-area: edit-profile;
	 height: 800px;
	 padding-bottom: 20px;
}
 .dashboard .grid-container .edit-profile h3 {
	 font-size: 20px;
	 color: #363b6d;
	 display: flex;
}
 .dashboard .grid-container .edit-profile h3 i {
	 font-size: 18px;
	 margin-left: 10px;
	 cursor: pointer;
	 transition: all 0.2s;
}
 .dashboard .grid-container .edit-profile h3 i:hover {
	 color: #e83114;
	 transform: scale(1.1);
}
 .dashboard .grid-container .edit-profile h1 {
	 margin-top: 100px;
	 color: #363b6d;
	 margin-left: 20px;
}
 .dashboard .grid-container .edit-profile .header {
	 color: white;
	 position: relative;
	 margin-bottom: 20px;
	 width: 60%;
}
 .dashboard .grid-container .edit-profile .header h1 {
	 color: white;
	 text-align: center;
	 font-size: 19px;
	 padding: 20px 10px;
	 font-weight: 100;
	 letter-spacing: 0.5px;
	 z-index: 3;
	 position: absolute;
	 width: 50%;
	 margin-top: 0;
}
 .dashboard .grid-container .edit-profile .header:after {
	 z-index: 2;
	 background-color: #363b6d;
	 width: 110%;
	 transform: rotate(-20deg) skewX(0deg);
	 opacity: 1;
	 content: "";
	 position: absolute;
	 top: -150px;
	 left: -30px;
	 height: 200px;
	 border-radius: 100px 283px 383px 319px / 132px 1px 24px 117px;
}
 .dashboard .grid-container .edit-profile .profile-picture {
	 border-radius: 50%;
	 margin-right: 20px;
	 height: 150px;
	 width: 150px;
	 float: right;
	 cursor: pointer;
	 position: relative;
	 overflow: hidden;
	 background-color: rgba(75, 78, 109, 0.3);
}
 .dashboard .grid-container .edit-profile .profile-picture img {
	 width: 100%;
	 height: 100%;
	 border-radius: 50%;
	 object-fit: cover;
}
 .dashboard .grid-container .edit-profile .profile-picture:after {
	 z-index: 2;
	 background-color: #363b6d;
	 width: 100%;
	 opacity: 0.8;
	 content: "";
	 position: absolute;
	 bottom: 0px;
	 height: 50px;
	 color: white;
	 content: "Edit";
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 transition: all 0.4s;
	 font-size: 18px;
	 letter-spacing: 1px;
}
 .dashboard .grid-container .edit-profile .profile-picture:hover:after {
	 opacity: 1;
	 height: 100%;
}
 .dashboard .grid-container .edit-profile .edit-interest {
	 width: auto;
	 clear: both;
	 margin: 20px;
	 color: #615f5e;
}
 .dashboard .grid-container .edit-profile .edit-interest p {
	 height: 90px;
	 word-wrap: break-word;
}
 .dashboard .grid-container .edit-profile .edit-interest p.p-small {
	 height: 24px;
}
 .dashboard .grid-container .edit-profile .edit-infos {
	 margin: 20px;
	 width: 100%;
}
 .dashboard .grid-container .edit-profile .edit-infos .profile-data {
	 width: 400px;
	 display: flex;
}
 .dashboard .grid-container .edit-profile .edit-infos .profile-data .data-details {
	 display: flex;
	 flex-direction: column;
	 align-items: center;
	 margin-right: 55px;
}
 .dashboard .grid-container .edit-profile .edit-infos .profile-data .data-details h5 {
	 position: initial;
}
 .dashboard .grid-container .edit-profile .edit-infos .profile-data .data-details h4 {
	 font-size: 20px;
	 color: #363b6d;
	 font-weight: normal;
}
 .dashboard .grid-container .edit-profile .edit-picture {
	 display: flex;
	 width: 100%;
	 padding-right: 10px;
	 clear: both;
	 flex-wrap: wrap;
}
 .dashboard .grid-container .edit-profile .edit-picture div {
	 height: 150px;
	 width: 150px;
	 margin-left: 10px;
	 margin-top: 10px;
	 border-radius: 0.25rem;
	 overflow: hidden;
	 cursor: pointer;
	 position: relative;
}
 .dashboard .grid-container .edit-profile .edit-picture div img {
	 width: 100%;
	 height: 100%;
	 object-fit: cover;
	 z-index: -1;
}
 .dashboard .grid-container .edit-profile .edit-picture div.picture:hover:after {
	 position: absolute;
	 width: 100%;
	 background-color: rgba(75, 78, 109, 0.8);
	 bottom: 0px;
	 color: white;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 transition: all 0.4s;
	 font-size: 18px;
	 letter-spacing: 1px;
	 content: "Delete";
	 height: 100%;
}
 .dashboard .grid-container .edit-profile .edit-picture div.picture-add {
	 background-color: rgba(75, 78, 109, 0.3);
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 color: white;
	 font-size: 30px;
}
 .dashboard .grid-container .edit-profile .edit-picture div.picture-add:hover {
	 background-color: #363b6d;
}
 .dashboard .grid-container .matchs {
	 grid-area: matchs;
	 height: max-content;
	 max-height: 800px;
	 min-height: 300px;
}
 .dashboard .grid-container .matchs .header {
	 color: white;
	 position: relative;
	 margin-bottom: 20px;
}
 .dashboard .grid-container .matchs .header h1 {
	 color: white;
	 text-align: center;
	 font-size: 19px;
	 padding: 20px 10px;
	 font-weight: 100;
	 letter-spacing: 0.5px;
	 z-index: 3;
	 position: absolute;
	 width: 100%;
}
 .dashboard .grid-container .matchs .header:after {
	 z-index: 2;
	 background-color: #e83114;
	 width: 110%;
	 transform: rotate(10deg) skewX(0deg);
	 opacity: 0.8;
	 content: "";
	 position: absolute;
	 top: -105px;
	 left: -10px;
	 height: 200px;
	 border-radius: 400px 0px 239px 0px / 123px 0px 121px 0px;
}
 .dashboard .grid-container .matchs .header:before {
	 z-index: 2;
	 background-color: white;
	 width: 110%;
	 transform: rotate(10deg) skewX(0deg);
	 opacity: 1;
	 content: "";
	 position: absolute;
	 top: -105px;
	 left: -10px;
	 height: 200px;
	 border-radius: 400px 0px 239px 0px / 123px 0px 121px 0px;
}
 .dashboard .grid-container .matchs .display-matchs {
	 max-height: 730px;
	 margin: 70px 20px 20px 20px;
	 visibility: hidden;
	 overflow-y: auto;
	 padding-top: 35px;
}
 .dashboard .grid-container .matchs .display-matchs:hover {
	 visibility: visible;
}
 .dashboard .grid-container .matchs .display-matchs::-webkit-scrollbar {
	 width: 8px;
}
 .dashboard .grid-container .matchs .display-matchs::-webkit-scrollbar-track {
	 background: transparent;
}
 .dashboard .grid-container .matchs .display-matchs::-webkit-scrollbar-thumb {
	 background: #776876;
	 border-radius: 3px;
}
 .dashboard .grid-container .matchs .display-matchs::-webkit-scrollbar-thumb:hover {
	 background: #363b6d;
}
 .dashboard .grid-container .matchs .display-matchs .one-match {
	 visibility: visible;
	 cursor: pointer;
	 width: 100%;
	 height: 80px;
	 margin-bottom: 15px;
}
 .dashboard .grid-container .matchs .display-matchs .one-match .one-match-content {
	 display: flex;
	 align-items: center;
}
 .dashboard .grid-container .matchs .display-matchs .one-match img {
	 width: 80px;
	 height: 80px;
	 border-radius: 50%;
	 object-fit: cover;
	 margin-right: 10px;
}
 .dashboard .grid-container .matchs .display-matchs .one-match .match-info {
	 height: 100%;
	 width: auto;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
}
 .dashboard .grid-container .matchs .display-matchs .one-match .match-info h5 {
	 position: initial;
}
 .dashboard .grid-container .matchs .display-matchs .one-match .match-info h4 {
	 font-size: 18px;
	 color: #363b6d;
	 margin-bottom: 5px !important;
}
 .dashboard .grid-container .last-view, .dashboard .grid-container .last-like {
	 padding: 20px;
	 overflow: hidden;
}
 .dashboard .grid-container .last-view img, .dashboard .grid-container .last-like img {
	 width: 120px;
	 height: 120px;
	 border-radius: 50%;
	 object-fit: cover;
}
 .dashboard .grid-container .last-view .img, .dashboard .grid-container .last-like .img {
	 position: relative;
	 border-radius: 50%;
	 overflow: hidden;
	 margin: 0 10px;
	 transition: all 0.3s;
	 box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 0.5);
}
 .dashboard .grid-container .last-view .img:after, .dashboard .grid-container .last-like .img:after {
	 background-color: #363b6d;
	 width: 130px;
	 transform: rotate(-8deg) skewX(0deg);
	 opacity: 0.6;
	 content: "";
	 position: absolute;
	 bottom: 0px;
	 left: 0;
	 height: 20px;
	 border-radius: 400px 0px 239px 0px / 123px 0px 121px 0px;
}
 .dashboard .grid-container .last-view .img:before, .dashboard .grid-container .last-like .img:before {
	 background-color: #e83114;
	 width: 130px;
	 transform: rotate(-14deg) skewX(0deg);
	 opacity: 0.6;
	 content: "";
	 position: absolute;
	 bottom: 0px;
	 height: 30px;
	 border-radius: 400px 0px 239px 0px / 123px 0px 121px 0px;
}
 .dashboard .grid-container .profiles-display {
	 width: 100%;
	 margin-top: 20px;
	 padding-top: 10px;
	 height: 180px;
	 display: flex;
	 overflow-x: auto;
	 visibility: hidden;
}
 .dashboard .grid-container .profiles-display:hover {
	 visibility: visible;
}
 .dashboard .grid-container .profiles-display::-webkit-scrollbar {
	 height: 8px;
}
 .dashboard .grid-container .profiles-display::-webkit-scrollbar-track {
	 background: transparent;
}
 .dashboard .grid-container .profiles-display::-webkit-scrollbar-thumb {
	 background: #776876;
	 border-radius: 3px;
}
 .dashboard .grid-container .profiles-display::-webkit-scrollbar-thumb:hover {
	 background: #363b6d;
}
 .dashboard .grid-container .profiles-display .one-profile {
	 visibility: visible;
	 float: left;
	 cursor: pointer;
	 display: flex;
	 flex-direction: column;
	 align-items: center;
	 height: 160px;
	 justify-content: space-between;
}
 .dashboard .grid-container .profiles-display .one-profile h4 {
	 font-size: 18px;
	 color: #363b6d;
}
 .dashboard .grid-container .profiles-display .one-profile:hover .img {
	 transform: scale(1.1);
	 box-shadow: 0px 2px 12px -4px rgba(0, 0, 0, 1);
}
 .dashboard .grid-container .profiles-display .one-profile.online .img:before {
	 background-color: #64a878;
}
 .dashboard .grid-container .profiles-display .one-profile.online .img:after {
	 background-color: #72c17c;
}
 .dashboard .grid-container .profiles-display .one-profile.online h4 {
	 color: #72c17c;
}
 @media screen and (max-width: 1000px) {
	 .body-container {
		 width: 100%;
		 padding: 50px 10px 0 10px;
	}
	 .dashboard .grid-container {
		 grid-gap: 0 10px;
	}
	 .dashboard .grid-container .grid-area {
		 margin-bottom: 10px;
	}
	 .dashboard .grid-container .edit-profile .header h1 {
		 width: 100%;
		 text-align: left;
		 margin-left: 10px;
	}
	 .dashboard .grid-container .edit-profile .edit-picture {
		 justify-content: space-between;
	}
	 .dashboard .grid-container .matchs .display-matchs {
		 margin: 70px 10px 20px 10px;
	}
	 .dashboard .grid-container .profile .profile-data {
		 margin-top: 0;
	}
	 .dashboard .grid-container .profile .profile-data .data-details {
		 margin-left: 20%;
	}
}
 @media screen and (max-width: 750px) {
	 .dashboard .grid-container {
		 display: flex;
		 flex-direction: column;
	}
	 .dashboard .grid-container .profile {
		 height: 532px;
	}
	 .dashboard .grid-container .profile .img:before {
		 width: 200%;
		 top: 50%;
		 height: 50%;
	}
	 .dashboard .grid-container .profile .img:after {
		 width: 200%;
		 top: 71%;
		 height: 50%;
	}
	 .dashboard .grid-container .matchs .header:before {
		 transform: rotate(4deg) skewX(0deg);
	}
	 .dashboard .grid-container .matchs .header:after {
		 transform: rotate(4deg) skewX(0deg);
	}
	 .dashboard .grid-container .edit-profile {
		 height: auto;
	}
}
 @media screen and (max-width: 550px) {
	 .dashboard .grid-container .profile .img:before {
		 width: 200%;
		 top: 60%;
		 height: 50%;
	}
	 .dashboard .grid-container .profile .img:after {
		 width: 200%;
		 top: 80%;
		 height: 50%;
	}
}

   </style>
