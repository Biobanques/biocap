db.getCollection('testReplace').find();
var result = [];
db.getCollection('testReplace').find({
    }).forEach(function(obj)
{
  var size = Object.bsonsize(obj);
    var id = obj._id.RNCE_Lib3_GroupeICCC+"/"+obj._id.RNCE_Lib3_SousGroupeICCC;

  print('_id: '+id+' || Size: '+size+'B -> '+Math.round(size/(1024))+'KB -> '+Math.round(size/(1024*1024))+'MB (max 16MB)');
});