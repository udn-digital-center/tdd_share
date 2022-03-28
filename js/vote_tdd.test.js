let {showVoteList,addVote,mailto,projectChck} = require('./vote_tdd.js');
let testData = [
  {'city':'台北','vote':0},
  {'city':'台中','vote':0},
  {'city':'台南','vote':0},
  {'city':'高雄','vote':0}
]

test('showVoteList 顯示投票清單', () => {
  expect(showVoteList().length).toEqual(4);
})

test('addVote 帶入ID投一張票', () => {
  const id = 1;
  const votenum = testData[id]['vote'];
    expect(addVote(id)).toEqual(votenum+1);
})

test('mailto 投票完寄出信件' , ()=>{
  expect(mailto().toBeTruthy);
})

test('Project launch', () => {
  const checkdate = '2022-03-26';
  const today = '2022-03-28'
  expect(projectChck(checkdate,today)).toEqual(true);
})
test('Project close', () => {
  const checkdate = '2022-03-26';
  const today = '2022-03-10'
  expect(projectChck(checkdate,today)).toEqual(false);
})





