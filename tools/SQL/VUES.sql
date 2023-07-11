CREATE or replace view v_regimeplat as
    select r.idregime, reg.descriRegime, p.descriPlat, r.quantite, u.descriUnite, p.pu, reg.poids, reg.duree from regimePlat r 
    join plat p on r.idplat=p.idplat join unite u on u.idunite=p.idunite join regime reg on reg.idregime=r.idregime;


CREATE or replace view v_regimeactivite as
    select r.idregime, reg.descriRegime, a.descriActivite, r.quantite from regimeActivite r 
    join activite a on a.idactivite=r.idactivite join regime reg on reg.idregime=r.idregime;

create or replace view v_totalcode as
    select utilisateur.iduser, utilisateur.nom, sum(code.valeur) as totalcode
    from utilisateur
    join entreecode on utilisateur.iduser=entreecode.iduser
    join code on entreecode.idcode=code.idcode
    where entreecode.idetat=11
    group by utilisateur.iduser, utilisateur.nom;

create or replace view v_totaldepense as
    select utilisateur.iduser, utilisateur.nom, sum(commanderegime.montant) as montant
    from utilisateur
    join commanderegime on utilisateur.iduser=commanderegime.iduser
    group by utilisateur.iduser, utilisateur.nom;

create or replace view v_code as
    select entreecode.*, code.descriCode, code.valeur, utilisateur.nom
    from entreecode
    join code on entreecode.idcode=code.idcode
    join utilisateur on entreecode.iduser=utilisateur.iduser;

create or replace view v_plat as
    select plat.*, descriUnite from plat join unite on unite.idunite=plat.idunite;