window.initFormEvents = function(){
    const replyFromButtons = document.querySelectorAll('.replyFormButton');
    const replyForm = document.getElementById('replyForm');
    const closeForm = document.getElementById('closeForm');
    const replyUserHandle = document.getElementById('replyUserHandle');
    const replyUserName = document.getElementById('replyUserName');
    const replyContent = document.getElementById('replyContent');
    const replyDate = document.getElementById('replyDate');
    //リプライのform内要素
    const inputTargetType = document.getElementById('inputTargetType');
    const inputTargetId = document.getElementById('inputTargetId');
    const inputParentId = document.getElementById('inputParentId');
    const replyTextarea = document.getElementById('replyTextarea');
    
    const setProfileUrl = replyUserHandle.dataset.profileUrl;
    let replyId = null;
    let replyUserId = null;

    replyFromButtons.forEach(btn =>{
        btn.addEventListener('click',()=>{
            replyId = btn.dataset.replyId;
            replyUserId = btn.dataset.replyUserId;
            replyUserName.textContent = btn.dataset.replyUserName;
            replyUserHandle.textContent = '@' + btn.dataset.replyUserHandle;
            replyDate.textContent = btn.dataset.replyDate;
            replyContent.textContent = btn.dataset.replyContent;
            const profileUrl = setProfileUrl.replace('USER_ID_PLACEHOLDER', replyUserId);
            replyUserHandle.href = profileUrl;
            replyForm.classList.remove('hidden');
            //inputの中身
            inputTargetType.value = btn.dataset.targetType;
            inputTargetId.value = btn.dataset.replyId;
            // inputParentId.value = (targetType.includes('Comment')) //parent_idはCommentの時のみ
            //     ? targetId
            //     : "";
            replyTextarea.value = "";
        });
        const closeFormFn = () =>{
            replyForm.classList.add('hidden');
        }
        closeForm?.addEventListener('click', closeFormFn);
        replyForm.addEventListener('click',(e) =>{
            if(e.target == replyForm){
                closeFormFn();
            }
        })
    });
};
document.addEventListener('DOMContentLoaded', window.initFormEvents);