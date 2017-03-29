var mapFunction = function(){
          var pat ={};
          pat.patients=[];
          var patient = {};
          patient.id = this.ident_tum_biocap;

          patient.samples=[];
           patient.samples.push({_id:this._id,Statut_juridique:this.Statut_juridique,Inclusion_protoc_rech:this.Inclusion_protoc_rech,Echant_tumoral:this.Echant_tumoral});
//         patient.samples.push(this)
          pat.patients.push(patient);

           emit(
   {       RNCE_Lib3_GroupeICCC:this.RNCE_Lib3_GroupeICCC!=""?this.RNCE_Lib3_GroupeICCC:"Inconnu",
       RNCE_Lib3_SousGroupeICCC:this.RNCE_Lib3_SousGroupeICCC!=""?this.RNCE_Lib3_SousGroupeICCC:"Inconnu"
       },
     pat
     ) };
     
var reduceFunction = function(key, vals){
          var result =  {};

          result.patients=[];

          for(var val in vals){
          pats = vals[val].patients;
          for(pat in pats){
          result.patients.push(pats[pat]);
              print(result);
          }}
          return result;
          };
          
var finalizeFunction = function(key,value){
            var partialResult = {};
            partialResult.patients={};
            var pats = value.patients;

        for(pat in pats){
        var idPat = pats[pat].id;
            var samps = pats[pat].samples;
             if(typeof partialResult.patients[idPat] == 'undefined'){
        partialResult.patients[idPat]=[];
             }
         for(samp in samps){

            partialResult.patients[idPat].push(samps[samp]);
            }
            }

            var partialResult2={};
            partialResult2.patients=[];
            for(partPat in partialResult.patients){
            var patient={};
            patient.id=partPat;
            patient.samples=partialResult.patients[partPat];
            patient.consentement=0;
            patient.inclusion=0;
  var listSamples=[];
            for(var sample in patient.samples){

                if(patient.samples[sample].Statut_juridique=='Refus'){
                    patient.consentement=2;
                }else if(patient.samples[sample].Statut_juridique=='Obtenu'&&patient.consentement!=2){
                patient.consentement=1;
                }
               if(patient.samples[sample].Inclusion_protoc_rech=='oui'){
                patient.inclusion=1;
                                }
                                listSamples.push(patient.samples[sample]._id);
                }
                patient.samples=listSamples;
             partialResult2.patients.push(patient);
        }
            var result={};
            result.patientPartialTotal=partialResult2.patients.length;
            result.patients=partialResult2.patients;
            result.CR=0;
            result.IE=0;
            for(finalPats in partialResult2.patients){
               if(partialResult2.patients[finalPats].consentement==1){
                   result.CR++;
               }
                              if(partialResult2.patients[finalPats].inclusion==1){
                   result.IE++;
               }
            }
            return result;
        };
  db.sampleCollected.mapReduce(
        mapFunction, 
        reduceFunction, 
        {   
            // limit:11000,
            out:'testMR2017',
//              finalize:finalizeFunction
            
        }
  );     
