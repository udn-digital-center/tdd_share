var mailto = require('./vote');

test('mailto', () => {
  expect(mailto(1)).toBe('somebody vote 1');
});