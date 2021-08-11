import { FC } from "react";
import fs from "fs";
import matter from "gray-matter";

interface IPostMeta {
  title: string;
  description: string;
  date: string;
  tags: Array<[]>;
}

interface IPost {
  meta: IPostMeta;
  content: string;
}

interface IProps {
  post: IPost;
}

const Post: FC<IProps> = ({ post }) => {
  return (
    <div>
      <h1>{post?.meta?.title ?? "Tchau"}</h1>
      <p>{post?.meta?.description}</p>
      <p>{post?.meta?.date}</p>
      <ul>
        {post?.meta?.tags.map((tag, index) => (
          <li key={index}>{tag}</li>
        ))}
      </ul>
      <p>{post?.content}</p>
    </div>
  );
};

export async function getStaticProps({ ...context }) {
  const { slug } = context.params;

  const content = fs.readFileSync(`_posts/${slug}.md`).toString();
  const info = matter(content);

  const article = {
    meta: {
      ...info.data,
      slug,
    },
    content: info.content,
  };

  return {
    props: {
      post: article,
    },
  };
}

export async function getStaticPaths() {
  const files = fs.readdirSync("_posts");

  const paths = files.map((file) => ({
    params: {
      slug: file.split(".")[0],
    },
  }));

  return {
    paths,
    fallback: false,
  };
}

export default Post;
