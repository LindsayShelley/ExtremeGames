CREATE TABLE IF NOT EXISTS eg_consolas (
  id bigint NOT NULL AUTO_INCREMENT,
  nombre varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS eg_catalago (
  id bigint NOT NULL AUTO_INCREMENT,
  nombre varchar(256) NOT NULL,
  descripcion text DEFAULT NULL,
  imagen text DEFAULT NULL,
  nu_consola bigint(20) DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (nu_consola) REFERENCES eg_consolas(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS eg_roles (
  id bigint NOT NULL AUTO_INCREMENT,
  nombre varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS eg_promociones (
  id bigint NOT NULL AUTO_INCREMENT,
  nombre varchar(256) NOT NULL,
  descripcion text DEFAULT NULL,
  imagen text DEFAULT NULL,
  vigencia varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;	

CREATE TABLE IF NOT EXISTS eg_users (
  id bigint NOT NULL AUTO_INCREMENT,
  nombre varchar(256) NOT NULL,
  paterno varchar(512) DEFAULT NULL,
  materno varchar(512) DEFAULT NULL,
  usuario varchar(256) NOT NULL,
  contraseña varchar(512) DEFAULT NULL,
  correo varchar(512) DEFAULT NULL,
  telefono varchar(128) DEFAULT NULL,
  direccion varchar(256) DEFAULT NULL,
  nu_rol bigint NOT NULL,
  imagen text DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (nu_rol) REFERENCES eg_roles(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;	

CREATE TABLE IF NOT EXISTS eg_puntos (
  id bigint NOT NULL AUTO_INCREMENT,
  puntos int NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS eg_saldos (
  id bigint NOT NULL AUTO_INCREMENT,
  saldo int NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS eg_horas (
  id bigint NOT NULL AUTO_INCREMENT,
  tiempo int NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS eg_puntos_horas (
  id bigint NOT NULL AUTO_INCREMENT,
  nu_puntos bigint NOT NULL,
  nu_tiempo bigint NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (nu_puntos) REFERENCES eg_puntos(id),
  FOREIGN KEY (nu_tiempo) REFERENCES eg_horas(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS eg_membresia (
  id bigint NOT NULL AUTO_INCREMENT,
  nu_user bigint NOT NULL,
  nu_saldo bigint DEFAULT NULL,
  nu_puntos bigint DEFAULT NULL,
  nu_extra bigint DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (nu_user) REFERENCES eg_users(id),
  FOREIGN KEY (nu_saldo) REFERENCES eg_saldos(id),
  FOREIGN KEY (nu_puntos) REFERENCES eg_puntos(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



