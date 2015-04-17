
/** posts indexes **/
db.getCollection("posts").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** users indexes **/
db.getCollection("users").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** posts records **/
db.getCollection("posts").insert({
  "_id": ObjectId("54f86ebaf7839e040c000029"),
  "title": "Love you and love your friend",
  "content": "What the fuck!!!",
  "author_id": NumberInt(1),
  "tags": [
    "love",
    "smile"
  ],
  "comments": {
    "comment_id": NumberInt(1),
    "comment": "Nice",
    "user_id": NumberInt(2),
    "replies": {
      "reply_id": NumberInt(1),
      "comment": "What's your feeling?",
      "user_id": NumberInt(2)
    }
  },
  "updated_at": ISODate("2015-03-05T14:56:58.0Z"),
  "created_at": ISODate("2015-03-05T14:56:58.0Z"),
  "post_id": 2
});
db.getCollection("posts").insert({
  "_id": ObjectId("54f86f11f7839ee808000029"),
  "title": "Hello \"River\"",
  "content": "insert()\r\n\r\nThe insert() is the primary method to insert a document or documents into a MongoDB collection, and has the following syntax:",
  "author_id": NumberInt(1),
  "tags": [
    "love",
    "smile"
  ],
  "comments": [
    {
      "comment_id": NumberInt(1),
      "comment": "Nice",
      "user_id": NumberInt(2),
      "replies": {
        "reply_id": NumberInt(1),
        "comment": "What's your feeling?",
        "user_id": NumberInt(2)
      }
    }
  ],
  "updated_at": ISODate("2015-03-05T14:58:25.0Z"),
  "created_at": ISODate("2015-03-05T14:58:25.0Z"),
  "post_id": 1
});
db.getCollection("posts").insert({
  "_id": ObjectId("54f877aff7839e2819000029"),
  "title": "You R in Love",
  "content": "Taylor Wsift",
  "author_id": NumberInt(1),
  "tags": [
    "love",
    "smile"
  ],
  "post_id": NumberInt(10),
  "updated_at": ISODate("2015-03-05T15:40:09.0Z"),
  "created_at": ISODate("2015-03-05T15:35:11.0Z"),
  "comments": [
    {
      "comment_id": NumberInt(1),
      "comment": "Imagination"
    }
  ]
});

/** users records **/
db.getCollection("users").insert({
  "_id": ObjectId("54fa79771ef91b50a1ca5cff"),
  "user_name": "Tran Duc Nhuan",
  "email": "tranducnhuan1994@gmail.com",
  "password": "123456789"
});
