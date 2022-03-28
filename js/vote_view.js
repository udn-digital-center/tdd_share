let {showVoteList,addVote,mailto,projectChck,data,checkdate,today} = require('./vote_tdd.js');


// let data = [
//     {'name':'peter','vote':0},
//     {'name':'mary','vote':0},
//     {'name':'chris','vote':0},
//     {'name':'joe','vote':0}
// ];
// 展示一下投票功能
// console.log(checkdate);
// console.log(today);
// console.log(projectChck(checkdate,today));
if(projectChck(checkdate,today)){
    showVoteList();
    console.log('歡迎投票');
    console.log(data);
    console.log('選擇一位');
    addVote(1);
    mailto();
    console.log('投票結果');
    console.log(data);
    mailto()
}else{
    console.log('投票結束');
}