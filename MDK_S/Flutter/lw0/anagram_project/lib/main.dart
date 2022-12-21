anagram<T>(String firstWord, String secondWord) {
  firstWord = firstWord.toUpperCase();
  secondWord = secondWord.toUpperCase();
  if (firstWord.substring(0, 1) !=
      secondWord.substring(firstWord.length - 1, 1)) {
    return false;
  }
  if (firstWord.length < 2) {
    return true;
  }
  firstWord = firstWord.substring(1, 1);
  secondWord = firstWord.substring(secondWord.length - 1, 1);
  return anagram(firstWord, secondWord);
}

void main() {
  anagram("finder", "Friend");
  anagram("hello", "bye");
  anagram("f? inder", "Friend");
}
