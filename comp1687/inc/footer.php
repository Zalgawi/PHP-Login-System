<!-- jQuery is required -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/js/uikit-icons.min.js"></script>

<script src="~za1180x/comp1687/assets/js/main.js"></script> <!--possibly have to change the location -->

<script src='https://www.google.com/recaptcha/api.js?render=6LcXJn4UAAAAAGoBcOFRIJvP7I5rifMTzDwPSAib'></script>
<script>
function recaptcha_callback(){
    var register_btn = document.querySelector('#registerbtn');
    register_btn.removeAttribute('disabled');
    register_btn.style.cursor = 'pointer';
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            

<script>
$(document).ready(function(){
    
    var user_id ='<?php echo $_SESSION['user_id'];?>';
    
    $('#job_data').DataTable({
        ajax: {
                    url: 'https://stuweb.cms.gre.ac.uk/~za1180x/comp1687/ajax/jobs.php',
                    type: 'GET',
                    dataType: 'json',
                    dataSrc: ""
                },
                columns: [
                    {
                        data: "jobTitle"
                    },
                    {
                        data: "jobSkills"
                    },
                    {
                        data: "jobDescription"
                    },
                    {
                        data: "jobImage"
                    },
                    {
                        data: "jobLocation"
                    },
                    {
                        data: "jobReward"
                    },
                    {
                        data: "jobStatus"
                    },
                    {
                         render: function(data, type, record) {
                             if(user_id === record.jobCreator){
                                 return '<input type="button" value="edit">'
                                    
                             
                         } else {
                             
                             return 'This post is not yours to edit';
                             }
                        }
                    }
                ]
    });
    
    
});
</script>