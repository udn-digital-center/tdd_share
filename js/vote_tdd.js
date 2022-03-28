let data = [
    {'name':'peter','vote':0},
    {'name':'mary','vote':0},
    {'name':'chris','vote':0},
    {'name':'joe','vote':0}
];
let checkdate = '2022-03-26 00:00:00';
let today = '2022-03-28 00:00:00';

function showVoteList(){
    data.forEach(element => {
        element['time'] = new Date();
    });
    return data;
}

function addVote(id){
    voteResult = data[id]['vote'] + 1;
    data[id]['vote'] = voteResult;
    return voteResult;
}

function mailto(){
    //送出EMAIL，然後回傳正確
    return true

}

function projectChck(checkdate,today){

    if(new Date(today) >= new Date(checkdate)){
        return true;
    }else{
        return false;
    }
}


// showVoteList();
// console.log(data);
// addVote(1);
// console.log(data);
// mailto()



module.exports = {showVoteList,addVote,mailto,projectChck,data,checkdate,today};