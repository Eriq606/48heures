CREATE or replace view v_regimeplat as
    select r.idregime, reg.descriRegime, p.descriPlat, r.quantite, u.descriUnite, p.pu, reg.poids from regimePlat r 
    join plat p on r.idplat=p.idplat join unite u on u.idunite=p.idunite join regime reg on reg.idregime=r.idregime;


CREATE or replace view v_regimeactivite as
    select r.idregime, reg.descriRegime, a.descriActivite, r.quantite from regimeActivite r 
    join activite a on a.idactivite=r.idactivite join regime reg on reg.idregime=r.idregime;
