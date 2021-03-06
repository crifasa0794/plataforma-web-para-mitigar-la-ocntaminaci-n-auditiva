toc.dat                                                                                             0000600 0004000 0002000 00000022037 13666277316 0014464 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        PGDMP       :                    x            daymar    12.2    12.2 !    ,           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false         -           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false         .           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false         /           1262    33035    daymar    DATABASE     ?   CREATE DATABASE daymar WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Colombia.1252' LC_CTYPE = 'Spanish_Colombia.1252';
    DROP DATABASE daymar;
                postgres    false                     2615    33036 	   principal    SCHEMA        CREATE SCHEMA principal;
    DROP SCHEMA principal;
                postgres    false         ?            1259    33037    perfil    TABLE     ?   CREATE TABLE principal.perfil (
    nombre character varying NOT NULL,
    apellido character varying NOT NULL,
    correo character varying,
    "contraseña" character varying NOT NULL,
    consecutivo integer NOT NULL
);
    DROP TABLE principal.perfil;
    	   principal         heap    postgres    false    6         ?            1259    33043    perfil_consecutivo_seq    SEQUENCE     ?   CREATE SEQUENCE principal.perfil_consecutivo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE principal.perfil_consecutivo_seq;
    	   principal          postgres    false    203    6         0           0    0    perfil_consecutivo_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE principal.perfil_consecutivo_seq OWNED BY principal.perfil.consecutivo;
       	   principal          postgres    false    204         ?            1259    33045    producto    TABLE     ?   CREATE TABLE principal.producto (
    codigo integer NOT NULL,
    nombre character varying(30),
    marca character varying(30),
    cantidad numeric(10,0),
    consecutivo integer NOT NULL
);
    DROP TABLE principal.producto;
    	   principal         heap    postgres    false    6         ?            1259    33048    producto_consecutivo_seq    SEQUENCE     ?   CREATE SEQUENCE principal.producto_consecutivo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE principal.producto_consecutivo_seq;
    	   principal          postgres    false    6    205         1           0    0    producto_consecutivo_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE principal.producto_consecutivo_seq OWNED BY principal.producto.consecutivo;
       	   principal          postgres    false    206         ?            1259    33050    usuario    TABLE     ?   CREATE TABLE principal.usuario (
    nombre character varying(30),
    apellido character varying(30),
    telefono character varying(20),
    correo character varying(20) NOT NULL,
    cedula character varying(10),
    consecutivo integer NOT NULL
);
    DROP TABLE principal.usuario;
    	   principal         heap    postgres    false    6         ?            1259    33053    usuario_consecutivo_seq    SEQUENCE     ?   CREATE SEQUENCE principal.usuario_consecutivo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE principal.usuario_consecutivo_seq;
    	   principal          postgres    false    207    6         2           0    0    usuario_consecutivo_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE principal.usuario_consecutivo_seq OWNED BY principal.usuario.consecutivo;
       	   principal          postgres    false    208         ?            1259    33055    usuario_id_user_seq    SEQUENCE        CREATE SEQUENCE principal.usuario_id_user_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE principal.usuario_id_user_seq;
    	   principal          postgres    false    6         ?            1259    33057    producto    TABLE     ?   CREATE TABLE public.producto (
    codigo integer NOT NULL,
    nombre character varying(30),
    marca character varying(30),
    cantidad numeric(10,0)
);
    DROP TABLE public.producto;
       public         heap    postgres    false         ?            1259    33060    tbl_personas    TABLE     ?   CREATE TABLE public.tbl_personas (
    id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    CONSTRAINT tbl_personas_id_check CHECK ((id > 0))
);
     DROP TABLE public.tbl_personas;
       public         heap    postgres    false         ?
           2604    33064    perfil consecutivo    DEFAULT     ~   ALTER TABLE ONLY principal.perfil ALTER COLUMN consecutivo SET DEFAULT nextval('principal.perfil_consecutivo_seq'::regclass);
 D   ALTER TABLE principal.perfil ALTER COLUMN consecutivo DROP DEFAULT;
    	   principal          postgres    false    204    203         ?
           2604    33065    producto consecutivo    DEFAULT     ?   ALTER TABLE ONLY principal.producto ALTER COLUMN consecutivo SET DEFAULT nextval('principal.producto_consecutivo_seq'::regclass);
 F   ALTER TABLE principal.producto ALTER COLUMN consecutivo DROP DEFAULT;
    	   principal          postgres    false    206    205         ?
           2604    33066    usuario consecutivo    DEFAULT     ?   ALTER TABLE ONLY principal.usuario ALTER COLUMN consecutivo SET DEFAULT nextval('principal.usuario_consecutivo_seq'::regclass);
 E   ALTER TABLE principal.usuario ALTER COLUMN consecutivo DROP DEFAULT;
    	   principal          postgres    false    208    207         !          0    33037    perfil 
   TABLE DATA           Y   COPY principal.perfil (nombre, apellido, correo, "contraseña", consecutivo) FROM stdin;
 	   principal          postgres    false    203       2849.dat #          0    33045    producto 
   TABLE DATA           S   COPY principal.producto (codigo, nombre, marca, cantidad, consecutivo) FROM stdin;
 	   principal          postgres    false    205       2851.dat %          0    33050    usuario 
   TABLE DATA           ]   COPY principal.usuario (nombre, apellido, telefono, correo, cedula, consecutivo) FROM stdin;
 	   principal          postgres    false    207       2853.dat (          0    33057    producto 
   TABLE DATA           C   COPY public.producto (codigo, nombre, marca, cantidad) FROM stdin;
    public          postgres    false    210       2856.dat )          0    33060    tbl_personas 
   TABLE DATA           2   COPY public.tbl_personas (id, nombre) FROM stdin;
    public          postgres    false    211       2857.dat 3           0    0    perfil_consecutivo_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('principal.perfil_consecutivo_seq', 9, true);
       	   principal          postgres    false    204         4           0    0    producto_consecutivo_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('principal.producto_consecutivo_seq', 15, true);
       	   principal          postgres    false    206         5           0    0    usuario_consecutivo_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('principal.usuario_consecutivo_seq', 20, true);
       	   principal          postgres    false    208         6           0    0    usuario_id_user_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('principal.usuario_id_user_seq', 11, true);
       	   principal          postgres    false    209         ?
           2606    33068    producto pk_consecutivo 
   CONSTRAINT     a   ALTER TABLE ONLY principal.producto
    ADD CONSTRAINT pk_consecutivo PRIMARY KEY (consecutivo);
 D   ALTER TABLE ONLY principal.producto DROP CONSTRAINT pk_consecutivo;
    	   principal            postgres    false    205         ?
           2606    33070    perfil pk_consecutivo_perfil 
   CONSTRAINT     f   ALTER TABLE ONLY principal.perfil
    ADD CONSTRAINT pk_consecutivo_perfil PRIMARY KEY (consecutivo);
 I   ALTER TABLE ONLY principal.perfil DROP CONSTRAINT pk_consecutivo_perfil;
    	   principal            postgres    false    203         ?
           2606    33072    usuario pk_usuario 
   CONSTRAINT     W   ALTER TABLE ONLY principal.usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (correo);
 ?   ALTER TABLE ONLY principal.usuario DROP CONSTRAINT pk_usuario;
    	   principal            postgres    false    207         ?
           2606    33074    tbl_personas tbl_personas_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.tbl_personas
    ADD CONSTRAINT tbl_personas_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.tbl_personas DROP CONSTRAINT tbl_personas_pkey;
       public            postgres    false    211                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         2849.dat                                                                                            0000600 0004000 0002000 00000000626 13666277316 0014305 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        alvaro	rincon	alvaro@ufpso.edu.co	12345	1
Siri	firulais	siri@yahoo.com	54321	2
alvaro	rincon	alvaro@ufpso.edu.co	12345	3
Leydy	Baez	3827392744	leydy@gmail.com	4
Wainer	quintero	3826326392	wainer@hotmail.com	5
Wainer	quintero	3826326392	wainer@hotmail.com	6
Wainer	quintero	3826326392	wainer@hotmail.com	7
Wainer	quintero	3648303834	wainer@hotmail.com	8
Wainer	quintero	3232823732	wainer@hotmail.com	9
\.


                                                                                                          2851.dat                                                                                            0000600 0004000 0002000 00000000037 13666277316 0014272 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        5145	tornado	singer	10	15
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 2853.dat                                                                                            0000600 0004000 0002000 00000000154 13666277316 0014274 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        pepito	perez	3216549877	pepeto@gmail.com	1234567	19
ana	jacome	3211233211	anita@gmail.com	123123123	20
\.


                                                                                                                                                                                                                                                                                                                                                                                                                    2856.dat                                                                                            0000600 0004000 0002000 00000000005 13666277316 0014272 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           2857.dat                                                                                            0000600 0004000 0002000 00000000005 13666277316 0014273 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           restore.sql                                                                                         0000600 0004000 0002000 00000020017 13666277316 0015405 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        --
-- NOTE:
--
-- File paths need to be edited. Search for $$PATH$$ and
-- replace it with the path to the directory containing
-- the extracted data files.
--
--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2
-- Dumped by pg_dump version 12.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE daymar;
--
-- Name: daymar; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE daymar WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Colombia.1252' LC_CTYPE = 'Spanish_Colombia.1252';


ALTER DATABASE daymar OWNER TO postgres;

\connect daymar

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: principal; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA principal;


ALTER SCHEMA principal OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: perfil; Type: TABLE; Schema: principal; Owner: postgres
--

CREATE TABLE principal.perfil (
    nombre character varying NOT NULL,
    apellido character varying NOT NULL,
    correo character varying,
    "contraseña" character varying NOT NULL,
    consecutivo integer NOT NULL
);


ALTER TABLE principal.perfil OWNER TO postgres;

--
-- Name: perfil_consecutivo_seq; Type: SEQUENCE; Schema: principal; Owner: postgres
--

CREATE SEQUENCE principal.perfil_consecutivo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE principal.perfil_consecutivo_seq OWNER TO postgres;

--
-- Name: perfil_consecutivo_seq; Type: SEQUENCE OWNED BY; Schema: principal; Owner: postgres
--

ALTER SEQUENCE principal.perfil_consecutivo_seq OWNED BY principal.perfil.consecutivo;


--
-- Name: producto; Type: TABLE; Schema: principal; Owner: postgres
--

CREATE TABLE principal.producto (
    codigo integer NOT NULL,
    nombre character varying(30),
    marca character varying(30),
    cantidad numeric(10,0),
    consecutivo integer NOT NULL
);


ALTER TABLE principal.producto OWNER TO postgres;

--
-- Name: producto_consecutivo_seq; Type: SEQUENCE; Schema: principal; Owner: postgres
--

CREATE SEQUENCE principal.producto_consecutivo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE principal.producto_consecutivo_seq OWNER TO postgres;

--
-- Name: producto_consecutivo_seq; Type: SEQUENCE OWNED BY; Schema: principal; Owner: postgres
--

ALTER SEQUENCE principal.producto_consecutivo_seq OWNED BY principal.producto.consecutivo;


--
-- Name: usuario; Type: TABLE; Schema: principal; Owner: postgres
--

CREATE TABLE principal.usuario (
    nombre character varying(30),
    apellido character varying(30),
    telefono character varying(20),
    correo character varying(20) NOT NULL,
    cedula character varying(10),
    consecutivo integer NOT NULL
);


ALTER TABLE principal.usuario OWNER TO postgres;

--
-- Name: usuario_consecutivo_seq; Type: SEQUENCE; Schema: principal; Owner: postgres
--

CREATE SEQUENCE principal.usuario_consecutivo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE principal.usuario_consecutivo_seq OWNER TO postgres;

--
-- Name: usuario_consecutivo_seq; Type: SEQUENCE OWNED BY; Schema: principal; Owner: postgres
--

ALTER SEQUENCE principal.usuario_consecutivo_seq OWNED BY principal.usuario.consecutivo;


--
-- Name: usuario_id_user_seq; Type: SEQUENCE; Schema: principal; Owner: postgres
--

CREATE SEQUENCE principal.usuario_id_user_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE principal.usuario_id_user_seq OWNER TO postgres;

--
-- Name: producto; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.producto (
    codigo integer NOT NULL,
    nombre character varying(30),
    marca character varying(30),
    cantidad numeric(10,0)
);


ALTER TABLE public.producto OWNER TO postgres;

--
-- Name: tbl_personas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbl_personas (
    id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    CONSTRAINT tbl_personas_id_check CHECK ((id > 0))
);


ALTER TABLE public.tbl_personas OWNER TO postgres;

--
-- Name: perfil consecutivo; Type: DEFAULT; Schema: principal; Owner: postgres
--

ALTER TABLE ONLY principal.perfil ALTER COLUMN consecutivo SET DEFAULT nextval('principal.perfil_consecutivo_seq'::regclass);


--
-- Name: producto consecutivo; Type: DEFAULT; Schema: principal; Owner: postgres
--

ALTER TABLE ONLY principal.producto ALTER COLUMN consecutivo SET DEFAULT nextval('principal.producto_consecutivo_seq'::regclass);


--
-- Name: usuario consecutivo; Type: DEFAULT; Schema: principal; Owner: postgres
--

ALTER TABLE ONLY principal.usuario ALTER COLUMN consecutivo SET DEFAULT nextval('principal.usuario_consecutivo_seq'::regclass);


--
-- Data for Name: perfil; Type: TABLE DATA; Schema: principal; Owner: postgres
--

COPY principal.perfil (nombre, apellido, correo, "contraseña", consecutivo) FROM stdin;
\.
COPY principal.perfil (nombre, apellido, correo, "contraseña", consecutivo) FROM '$$PATH$$/2849.dat';

--
-- Data for Name: producto; Type: TABLE DATA; Schema: principal; Owner: postgres
--

COPY principal.producto (codigo, nombre, marca, cantidad, consecutivo) FROM stdin;
\.
COPY principal.producto (codigo, nombre, marca, cantidad, consecutivo) FROM '$$PATH$$/2851.dat';

--
-- Data for Name: usuario; Type: TABLE DATA; Schema: principal; Owner: postgres
--

COPY principal.usuario (nombre, apellido, telefono, correo, cedula, consecutivo) FROM stdin;
\.
COPY principal.usuario (nombre, apellido, telefono, correo, cedula, consecutivo) FROM '$$PATH$$/2853.dat';

--
-- Data for Name: producto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.producto (codigo, nombre, marca, cantidad) FROM stdin;
\.
COPY public.producto (codigo, nombre, marca, cantidad) FROM '$$PATH$$/2856.dat';

--
-- Data for Name: tbl_personas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tbl_personas (id, nombre) FROM stdin;
\.
COPY public.tbl_personas (id, nombre) FROM '$$PATH$$/2857.dat';

--
-- Name: perfil_consecutivo_seq; Type: SEQUENCE SET; Schema: principal; Owner: postgres
--

SELECT pg_catalog.setval('principal.perfil_consecutivo_seq', 9, true);


--
-- Name: producto_consecutivo_seq; Type: SEQUENCE SET; Schema: principal; Owner: postgres
--

SELECT pg_catalog.setval('principal.producto_consecutivo_seq', 15, true);


--
-- Name: usuario_consecutivo_seq; Type: SEQUENCE SET; Schema: principal; Owner: postgres
--

SELECT pg_catalog.setval('principal.usuario_consecutivo_seq', 20, true);


--
-- Name: usuario_id_user_seq; Type: SEQUENCE SET; Schema: principal; Owner: postgres
--

SELECT pg_catalog.setval('principal.usuario_id_user_seq', 11, true);


--
-- Name: producto pk_consecutivo; Type: CONSTRAINT; Schema: principal; Owner: postgres
--

ALTER TABLE ONLY principal.producto
    ADD CONSTRAINT pk_consecutivo PRIMARY KEY (consecutivo);


--
-- Name: perfil pk_consecutivo_perfil; Type: CONSTRAINT; Schema: principal; Owner: postgres
--

ALTER TABLE ONLY principal.perfil
    ADD CONSTRAINT pk_consecutivo_perfil PRIMARY KEY (consecutivo);


--
-- Name: usuario pk_usuario; Type: CONSTRAINT; Schema: principal; Owner: postgres
--

ALTER TABLE ONLY principal.usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (correo);


--
-- Name: tbl_personas tbl_personas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbl_personas
    ADD CONSTRAINT tbl_personas_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 