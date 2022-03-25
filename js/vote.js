// 投票系統
// 需求: 列出投票清單  可點選後該項+1

let votelist = [
    {'city':'台北','vote' :0},
    {'city':'台中','vote':0},
    {'city':'台南','vote':0},
    {'city':'高雄','vote':0}
];

function showVoteList(){
    votelist.forEach(element => {
        console.log(element)
    });
}

function addVote(id){

    votelist[id]['vote'] = votelist[id]['vote'] + 1;
    mailto(id);
}

function mailto(id){
    console.log('somebody vote' + id);
    return 'somebody vote ' + id;
}


// showVoteList();
// console.log('---投票後---');
// addVote(2);
// addVote(1);
// addVote(1);
// showVoteList();

module.exports = mailto;