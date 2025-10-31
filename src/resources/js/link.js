window.goToDetail = function(e) {
    const post = e.currentTarget;
    const postId = post.dataset.postId;
    if (!postId) return;
    window.location.href = `/${postId}/post-show`;
};

window.goToProfile = function(e) {
    e.stopPropagation();
    const userId = e.currentTarget.dataset.userId;
    if (!userId) return;
    window.location.href = `/${userId}/mypage`;
};