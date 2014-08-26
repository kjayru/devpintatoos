<?php session_start();
require ('inc.head.php');
require ('inc.header.php');
if($_GET['user']){
$usuario = $_GET['user'];
}
include_once("clases/class.post.php");
$post = new Post();
if($_GET['user']){
$resultado = $post->mispost($usuario);
}else{
$resultado = $post->todos();	
}
/*echo "<pre>";
print_r($resultado);
echo "</pre>";*/
?>
<div class="wall smallBrick" id="photos" style="height: 1000px;">
        <div class="goTopButton">
            <a href="javascript:scrollToElement($('.bodyContent'))" title="Go to top" rel="nofollow">
                <img src="/img/goTopButton.png" alt="Go to top" />
            </a>

        </div>
        
         <?php $i=1; foreach($resultado as $row){ ?>
      <div class="brick" id="imga-<?=$i ?>" mediaid="<?=$i ?>" actioninit="true">
     
                <div class="brickBody">
<!--- head post --->
                        <div class="user owner clearfix poster">
                            <div class="profileImage">
                                <a href="/frankieromustdie" title="frnkiero" target="_blank">
                                    <img src="files/<?=$row['picture'] ?>">
                                </a>
                            </div>
                            <div class="userName">
                                <a href="/<?=$row['usuario'] ?>" title="frnkiero" target="_blank"><?=$row['usuario'] ?> </a>
                            </div>
                        </div>
<!--- end head post -->
                    <div class="pic">

                        <div class="brickActions" style="display: none;">
                            <a class="brickLike btn btn-danger" title="Double-click on the photo also likes">
                                <i class="icon-heart icon-white"></i><span class="aText">Like</span>
                            </a>
                            <a class="btn btn-primary dropdown-toggle" href="javascript:void(0)" title="Share" rel="nofollow"><i class="icon-share-alt icon-white"></i><span class="aText">Share</span></a>
                            <a class="btn btn-success" title="Comment">
                                <i class="icon-comment icon-white"></i><span class="aText">Comment</span>
                            </a>
                                                    </div>
                                                    
                        <div class="thumb-load">
                            <img src="/Content/MultiView/pic-load.gif" alt="Loading">
                        </div>
                        
                        <a class="picLink">
                            <img class="picThumb" src="files/<?=$row['media'] ?>" alt="">
                            <img class="picThumb picFull" srcx="files/<?=$row['media'] ?>" alt="">
                        </a>
                        
                    </div>
		<!--- texto ingresado --->
                    <div class="caption emojstext">
                    The More You Know...                    
                    </div>
		<!---- texto end --->
        <!--- status----->
                    <div class="stats">
                        <span class="likesCount">6903</span>
                            <span class="commentsCount">277</span>
                                                                        <span class="createTime">2 hours ago</span>
                    </div>
                               
        <!---- fin status --> 
        <!---- comentarios -->             
                       <div class="comments">
                                <div class="user clearfix">
                                    <div class="profileImage">
                                        <a href="/thestripedlunchkit" title="Jackie :P" target="_blank">
                                            <img src="http://photos-c.ak.instagram.com/hphotos-ak-xpa1/925583_1475234266050354_1994998513_a.jpg">
                                        </a>
                                    </div>
                                    <div class="commentRight">
                                        <div class="userName">
                                            <a href="/thestripedlunchkit" title="Jackie :P" target="_blank">thestripedlunchkit </a>
                                        </div>
                                        <div class="commentText emojstext">Fun fact <a href="/aman" target="_blank">@aman</a>._.duh</div>

                                    </div>
                                </div>
                                
                        </div>
        <!--fin comentarios --->
                </div>
                
           
                <div class="shadow"></div>
            </div> 
             <?php $i++; } ?>              
  </div>
<?php require ('inc.footer.php');
require ('inc.foot.php'); ?>